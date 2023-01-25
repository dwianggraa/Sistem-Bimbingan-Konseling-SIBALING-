<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\User;
use App\Models\Pelanggaran;
use App\Models\Perizinan;
use RealRashid\SweetAlert\Facades\Alert;

class PerizinanController extends Controller
{
    public function index()
    {
        $perizinan =  Perizinan::latest();
        if(request('search')){
            $perizinan->where('name', 'like', '%'. request('search') . '%');
        }
        
        return view('perizinan.index')->with([

            'perizinan' => $perizinan->paginate(5)
            
        ]);
    }

    public function create()
    {

        return view('perizinan.create');
    }

    public function edit($id){
        $perizinan = Perizinan::findorfail($id);
        return view('perizinan.edit', compact('perizinan'));
        
    }

    public function update(Request $request,$id){
        $peg = Perizinan::findorfail($id);
        $peg->update($request->all());
        return redirect('/perizinan');

    }
    public function PerizinanGuest()
    {
        $perizinan =  Perizinan::latest();
        return view('guest.perizinan' , compact('perizinan'));
    }

    public function store(Request $request)
    {
       $validatedData = $request->validate([
        'name'=> 'required',
        'nis' => 'required',
        'kelas'=> 'required',
        'jurusan' => 'required',
        'jenis'=> 'required',
        'suratizin' => 'image|file|max:2048',
        'tgl' => 'required',
       ]);

       if($request->file('suratizin')){
        $validatedData['suratizin'] = $request->file('suratizin')->store('pelanggaran-suratizin');
       }
        Perizinan::create($validatedData);
        return redirect('/perizinan');

    }

    public function destroy($id){
        Alert::question('Question Title', 'Question Message');
        $peg = Perizinan::find($id);
        $peg->delete();
        return back();

        
    }
}
