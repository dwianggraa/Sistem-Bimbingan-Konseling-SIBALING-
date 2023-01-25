<?php

namespace App\Http\Controllers;

use App\Models\KesehatanMental;
use Illuminate\Http\Request;

class KesehatanMentalController extends Controller
{
    public function index()
    {
        $kesehatan =  KesehatanMental::latest();
        if(request('search')){
            $kesehatan->where('name', 'like', '%'. request('search') . '%');
        }
        
        return view('kesehatan.index')->with([

            'kesehatan' => $kesehatan->paginate(5)
            
        ]);
    }

    // public function show()
    // {
    //     $kesehatan =  KesehatanMental::all();
        
    //     return view('dashbaord.dashboardSiswa')
    //     ;
    // }

    public function create()
    {
        return view('kesehatan.create');
    }

    public function edit($id){
        $kesehatan = KesehatanMental::findorfail($id);
        return view('kesehatan.edit', compact('kesehatan'));
        
    }

    public function update(Request $request,$id){
        $kesehatan = KesehatanMental::findorfail($id);
        $kesehatan->update($request->all());
        return redirect('/kesehatan');

    }

    public function search(Request $request)
    {
        // $term = $request->get('term');
        // $users = Pelanggaran::where('username', 'like', '%' . $term . '%')->get();
    }

    public function store(Request $request)
    {
        // dd($request->all());
        KesehatanMental::create([
            'judul'=> $request->judul,
            'deskripsi' => $request->deskripsi,
            'tgl' => $request->tgl,
            
        ]);

        return redirect('/kesehatan');

    }

    public function destroy($id){
        $kesehatan = KesehatanMental::find($id);
        $kesehatan->delete();
        return back();

        
    }
}
