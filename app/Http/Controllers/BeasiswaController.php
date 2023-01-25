<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\User;
use App\Models\Beasiswa;
use RealRashid\SweetAlert\Facades\Alert;

class BeasiswaController extends Controller
{
    public function index()
    {
        $beasiswa =  Beasiswa::latest();
        if(request('search')){
            $beasiswa->where('name', 'like', '%'. request('search') . '%');
        }
        
        return view('beasiswa.index')->with([

            'beasiswa' => $beasiswa->paginate(10)
            
        ]);
    }

    public function create()
    {
        return view('beasiswa.create');
    }

    public function edit($id){
        $beasiswa = Beasiswa::findorfail($id);
        return view('beasiswa.edit', compact('beasiswa'));
        
    }

    public function update(Request $request,$id){
        $beasiswa = Beasiswa::findorfail($id);
        $beasiswa->update($request->all());
        return redirect('/beasiswa');

    }


    public function store(Request $request)
    {
        // dd($request->all());
        Beasiswa::create([
            'judul'=> $request->judul,
            'deskripsi' => $request->deskripsi,
            'dokumen'=> $request->dokumen,
            'kontak'=> $request->kontak,
            'tgl' => $request->tgl,
            
        ]);

        return redirect('/beasiswa');

    }

    public function destroy($id){
        $beasiswa = Beasiswa::find($id);
        $beasiswa->delete();
        return back();
    }
}
