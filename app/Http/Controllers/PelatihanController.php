<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelatihan;
use App\Models\Peserta;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;


class PelatihanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if($request->input('query')){
            $query = $request->input('query');
            $rows = Pelatihan::litePaginateWithCount(10, $query);
        }else{
            $query = null;
            $rows = Pelatihan::litePaginateWithCount(10, $query);
        }
        

        return view('adminCourses', compact('rows','query'), [
            'title' => 'Rumah Inovatif'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255|unique:pelatihans,title',
            'body' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'regist_start' => 'required',
            'regist_end' => 'required',
            'event_start' => 'required',
            'event_end' => 'required',
            'lokasi' => 'required',
            'metode' => 'required',
        ]);

        if ($request->hasFile('image')) {
            // Menghasilkan nama file unik
            $image = $request->file('image');
            $imageName = uniqid() . '.' . $image->getClientOriginalExtension();
            // Menyimpan file di storage/app/public/pelatihan/images
            $path = $image->storeAs('pelatihan/images', $imageName, 'public');
            // Menyimpan URL file di database
            $validatedData['image'] = Storage::url($path);
        }       
        
        $validatedData['slug'] =  now()->format('Y-m-d-H-i-s') . '-' . Str::slug($request['title']. '-');
        try {
            Pelatihan::create($validatedData);
            return redirect(route('admin.course'))->with('success','pelatihan : '.$request['title'].' telah berhasil ditambahkan');
        }catch (\Exception $e){
            return redirect()->back()->with('galat','gagal menambahkan data pelatihan')->withErrors(['error' => 'Terjadi kesalahan saat menambahkan data'])->withInput();
        }         
    }

    /**
     * Display the specified resource.
     */
    public function show($slug)
    {
        $row = Pelatihan::where('slug',$slug)->get();
        $id = $row[0]['id'];
        $rows = Peserta::where('pelatihan_id',$id)->get();
        return view('adminCourse', compact('row','rows'), [
            'title' => $slug
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($slug)
    {
        $row = Pelatihan::where('slug',$slug)->get();
        return view('adminCourseEdit', compact('row'), [
            'title' => $slug
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update2(Request $request, $slug)
    {        
        $validatedData = $request->validate([
            'title' => 'required|string|max:255|unique:pelatihans,title',
            'body' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'regist_start' => 'required',
            'regist_end' => 'required',
            'event_start' => 'required',
            'event_end' => 'required',
            'lokasi' => 'required',
            'metode' => 'required',
        ]);
        $acceptTerms = $request->input('hapusGambar', false);

        $pelatihan = Pelatihan::where('slug', $slug)->firstOrFail();

        // Menghapus gambar lama jika ada permintaan hapus atau jika ada gambar baru diunggah
        if ($acceptTerms) {
            if ($pelatihan->image) {
                $oldImagePath = str_replace('/storage', 'public', $pelatihan->image);
                Storage::delete($oldImagePath);
                $validatedData['image'] = null;
            }
        }else{
            if ($request->hasFile('image')) {
                // Menghapus file lama jika ada
                if ($pelatihan->image) {
                    $oldImagePath = str_replace('/storage', 'public', $pelatihan->image);
                    Storage::delete($oldImagePath);
                }
        
                // Menghasilkan nama file unik
                $image = $request->file('image');
                $imageName = uniqid() . '.' . $image->getClientOriginalExtension();
                // Menyimpan file di storage/app/public/images
                $path = $image->storeAs('pelatihan/images', $imageName, 'public');
                // Menyimpan URL file di database
                $validatedData['image'] = Storage::url($path);
            } elseif (!isset($validatedData['image'])) {
                $validatedData['image'] = $pelatihan->image; // Tetap gunakan URL lama jika tidak ada file baru yang diunggah
            }
        }

        $validatedData['slug'] =  now()->format('Y-m-d-H-i-s') . '-' . Str::slug($request['title']. '-');
        try {
            Pelatihan::where('slug', $slug)->update($validatedData);;
            return redirect(route('admin.course'))->with('warning','pelatihan : '.$request['title'].' telah berhasil diubah');
        }catch (\Exception $e){
            return redirect()->back()->with('galat','gagal mengubah data pelatihan')->withErrors(['error' => 'Terjadi kesalahan saat menambahkan data'])->withInput();
        }        
    }

    public function update(Request $request, $slug)
{        
    
    $validatedData = $request->validate([
        'title' => [
            'required',
            'string',
            'max:255',
            Rule::unique('pelatihans', 'title')->ignore($slug, 'slug'),
        ],
        'body' => 'required',
        'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'regist_start' => 'required',
        'regist_end' => 'required',
        'event_start' => 'required',
        'event_end' => 'required',
        'lokasi' => 'required',
        'metode' => 'required',
    ]);

    if($request['hapusGambar'] == 1){
        $acceptTerms = true;
    }else{
        $acceptTerms = false;
    }        
    $pelatihan = Pelatihan::where('slug', $slug)->firstOrFail();
    // Menghapus gambar lama jika ada permintaan hapus atau jika ada gambar baru diunggah
    if ($acceptTerms) {
        if ($pelatihan->image) {
            $oldImagePath = str_replace('/storage', 'public', $pelatihan->image);
            Storage::delete($oldImagePath);
            $validatedData['image'] = null; // Setel kolom image menjadi null
        }
    } elseif ($request->hasFile('image')) {
        // Menghapus file lama jika ada
        if ($pelatihan->image) {
            $oldImagePath = str_replace('/storage', 'public', $pelatihan->image);
            Storage::delete($oldImagePath);
        }
    
        // Menghasilkan nama file unik
        $image = $request->file('image');
        $imageName = uniqid() . '.' . $image->getClientOriginalExtension();
        // Menyimpan file di storage/app/public/images
        $path = $image->storeAs('pelatihan/images', $imageName, 'public');
        // Menyimpan URL file di database
        $validatedData['image'] = Storage::url($path);
    }


    $validatedData['slug'] =  now()->format('Y-m-d-H-i-s') . '-' . Str::slug($request['title']. '-');
    try {
        Pelatihan::where('slug', $slug)->update($validatedData);;
        return redirect(route('admin.course'))->with('warning','pelatihan : '.$request['title'].' telah berhasil diubah');
    }catch (\Exception $e){
        return redirect()->back()->with('galat','gagal mengubah data pelatihan')->withErrors(['error' => 'Terjadi kesalahan saat menambahkan data'])->withInput();
    }       
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($slug)
    {
        $pelatihan = Pelatihan::where('slug', $slug)->firstOrFail();

        // Hapus gambar terkait jika ada
        if ($pelatihan->image) {
            $oldImagePath = str_replace('/storage', 'public', $pelatihan->image);
            Storage::delete($oldImagePath);
        }

        // Hapus record pelatihan
        $pelatihan->delete();
        return redirect(route('admin.course'))->with('danger','Pelatihan: '.$slug.' telah berhasil dihapus');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Pelatihan::class, 'slug', 'My First Post');
        return responsive()->json(['slug' => $slug]);
    }
}
