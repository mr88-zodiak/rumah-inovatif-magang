<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;
use App\Models\Contentslider;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class ContentSliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = Contentslider::get();

        // dd($rows);
        return view('adminHome', compact('rows'), [
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
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            // Menghasilkan nama file unik
            $image = $request->file('image');
            $imageName = uniqid() . '.' . $image->getClientOriginalExtension();
            // Menyimpan file di storage/app/public/pelatihan/images
            $path = $image->storeAs('content/sliders', $imageName, 'public');
            // Menyimpan URL file di database
            $validatedData['image'] = Storage::url($path);
        }       
                
        try {
            Contentslider::create($validatedData);
            return redirect(route('admin.home'))->with('success','gambar telah berhasil ditambahkan');
        }catch (\Exception $e){
            return redirect()->back()->with('galat','gagal menambahkan gambar')->withErrors(['error' => 'Terjadi kesalahan saat menambahkan gambar'])->withInput();
        }   
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $validatedData = $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'id' => 'required',
        ]);
        $pelatihan = Contentslider::where('id', $validatedData['id'])->firstOrFail();

        // Hapus gambar terkait jika ada
        if ($pelatihan->image) {
            $oldImagePath = str_replace('/storage', 'public', $pelatihan->image);
            Storage::delete($oldImagePath);
        }

        // Hapus record pelatihan
        $pelatihan->delete();
        return redirect(route('admin.home'))->with('danger','Pelatihan: telah berhasil dihapus');
    }
}
