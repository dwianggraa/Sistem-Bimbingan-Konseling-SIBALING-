<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function addSiswa(){
        $siswa = [
            ""
        ];
    }

    public function search(){
        return view('pelanggaran.create');
    }

    public function autocomplete(Request $request){
        $datas = Siswa::select("name")
        ->where("name", "LIKE","%{$request->terms}%")
        ->get();
        return response()->json($datas);
    }
}
