<?php

namespace App\Http\Controllers;

use App\Models\Pelanggaran;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboardAdmin(Request $request){


        $pelanggaran = Pelanggaran::all();

        // $categories = [];
        // foreach($pelanggaran as $jur){
        //     $categories[] = $jur->jurusan;
        // }
            return view('dashboard.dashboard-admin', ['pelanggaran' => $pelanggaran]);
    }

    public function dashboardSiswa(){
        return view('dashboard.dashboard-siswa');
}

public function dashboardGuest(){
    $pelanggaran = Pelanggaran::all();
        return view('guest.dashboard-guest');
}

public function dashboard(){
        return view('dashboard.dashboard');
}

public function konseling(){
    return view('layanankonseling.index');
}
}