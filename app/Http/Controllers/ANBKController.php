<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\User;
use App\Models\ANBK;
use App\Models\Pelanggaran;
use RealRashid\SweetAlert\Facades\Alert;

class ANBKController extends Controller
{
    public function index()
    {
        $anbk =  ANBK::latest();
        if(request('search')){
            $anbk->where('name', 'like', '%'. request('search') . '%');
        }
        
        return view('anbk.index')->with([

            'anbk' => $anbk->paginate(5)
            
        ]);
    }

    public function create()
    {
        return view('anbk.create');
    }

    public function edit($id){
        $anbk = ANBK::findorfail($id);
        return view('anbk.edit', compact('anbk'));
        
    }

    public function update(Request $request,$id){
        $anbk = ANBK::findorfail($id);
        $anbk->update($request->all());
        return redirect('/anbk');

    }

    public function search(Request $request)
    {
        // $term = $request->get('term');
        // $users = Pelanggaran::where('username', 'like', '%' . $term . '%')->get();
    }

    public function store(Request $request)
    {
        // dd($request->all());
        ANBK::create([
            'judul'=> $request->judul,
            'deskripsi' => $request->deskripsi,
            'dokumen'=> $request->dokumen,
            'kontak'=> $request->kontak,
            'tgl' => $request->tgl,
            
        ]);

        return redirect('/anbk');

    }

    public function destroy($id){
        $anbk = ANBK::find($id);
        $anbk->delete();
        return back();

        
    }
}
