<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\User;
use App\Models\Pelanggaran;
use RealRashid\SweetAlert\Facades\Alert;

class PelanggaranController extends Controller
{
    public function index()
    {
        
        $pelanggaran =  Pelanggaran::latest();
        if(request('search')){
            $pelanggaran->where('name', 'like', '%'. request('search') . '%');
        }

        
        return view('pelanggaran.index')->with([

            'pelanggaran' => $pelanggaran->paginate(5)
            
        ]);
    }

    public function create()
    {
        return view('pelanggaran.create');
    }

    public function edit($id){
        $pelanggaran = Pelanggaran::findorfail($id);
        return view('pelanggaran.edit', compact('pelanggaran'));
        
    }

    public function PelanggaranGuest()
    {
        $pelanggaran =  Pelanggaran::all();
        return view('guest.pelanggaran'.compact('pelanggaran'));
    }


    public function update(Request $request,$id){
        $pelanggaran = Pelanggaran::findorfail($id);
        $pelanggaran->update($request->all());
        return redirect('/pelanggaran');

    }


    public function store(Request $request)
    {
        // dd($request->all());
        Pelanggaran::create([
            'name'=> $request->name,
            'nis' => $request->nis,
            'kelas'=> $request->kelas,
            'jurusan' => $request->jurusan,
            'jenis'=> $request->jenis,
            'deskripsi' => $request->deskripsi,
            'jumlahpoin'=> $request->jumlahpoin,
            'tgl' => $request->tgl,
        ]);

        return redirect('/pelanggaran');

    }

    public function destroy($id){
        $pelanggaran = Pelanggaran::find($id);
        $pelanggaran->delete();
        return back();

        
    }
    
}
