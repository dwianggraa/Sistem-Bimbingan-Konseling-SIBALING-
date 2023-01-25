<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
   public function index(){
    return view('login.index');
   }

   public function loginsiswa(){
    return view('login.login-siswa');
   }

   public function AutentifikasiSiswa(Request $request){
    if(Auth::attempt($request->only('username','password'))){
        return redirect('dashboard-siswa');
    }
    return back()->with('loginError', 'Login tidak berhasil!');
   }


   public function autentifikasi(Request $request){
    if(Auth::attempt($request->only('username','password'))){
        return redirect('dashboard-admin');
    }
    return back()->with('loginError', 'Login tidak berhasil!');
   }

   public function logout(){
    Auth::logout();
    return redirect('/');
   }
}
