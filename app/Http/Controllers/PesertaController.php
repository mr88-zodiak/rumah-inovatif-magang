<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelatihan;
use App\Models\Peserta;
use Illuminate\Support\Str;

class PesertaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    

    public function index()
    {
        $row = Pelatihan::where('slug',$slug)->get();
            return view('course', compact('row'), [
                'title' => $slug
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
    public function store($slug, Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'institut' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'no_hp' => 'nullable|string|max:15',
            'pelatihan_id' => 'nullable|integer',
        ]);
        try {
            Peserta::create($validatedData);
            return redirect('/')->with('success',''.$request['name'].' telah ditambahkan ke pelatihan');
        }catch (\Exception $e){
            return redirect()->back()->with('galat','gagal menambahkan data pelatihan')->withErrors(['error' => 'Terjadi kesalahan saat menambahkan data'])->withInput();
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
    public function destroy(string $id)
    {
        //
    }
}
