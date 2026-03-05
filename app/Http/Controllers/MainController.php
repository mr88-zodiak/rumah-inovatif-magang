<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelatihan;
use App\Models\Peserta;
use App\Models\Contentslider;
use Illuminate\Support\Str;

class MainController extends Controller
{
    public function index(Request $request)
    {
        if($request->input('query')){
            $query = $request->input('query');
            $rows = Pelatihan::litePaginate(9, $query);            
        }else{
            $query = null;
            $rows = Pelatihan::litePaginate(9, $query);
        }
        $sliders = Contentslider::all();
        return view('home', compact('rows','query','sliders'), [
            'title' => 'Rumah Inovatif'
        ]);
    }

    public function course($slug, Request $request)
    {
        if($request->input('name')){
            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
                'institut' => 'required|string|max:255',
                'jabatan' => 'required|string|max:255',
                'no_hp' => 'nullable|string|max:15',
                'pelatihan_id' => 'nullable|integer',
            ]);
    
            Peserta::create($validatedData);

            return redirect('/')->with('success',''.$request['name'].' telah ditambahkan ke pelatihan');
        }else{
            $row = Pelatihan::where('slug',$slug)->get();
            return view('course', compact('row'), [
                'title' => $slug
            ]);
        }
        
    }

}
