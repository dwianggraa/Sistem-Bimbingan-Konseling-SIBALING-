<?php

namespace App\Http\Controllers;

use App\Models\Konseling;
use Illuminate\Http\Request;

class KonselingController extends Controller
{
    public function index(){
        return view('layanankonseling.index');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        Konseling::create([
            'nis'=> $request->judul,
            'nama' => $request->deskripsi,
            'nim'=> $request->dokumen,
            'kontak'=> $request->kontak,
            'tgl' => $request->tgl,
            
        ]);

        return redirect('/beasiswa');

    }
}
