<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;


class RegisterController extends Controller
{
    public function index(){
        return view('register.index', [
            'tittle' => 'Register',
            'active' => 'register'
        ]);
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'username' => 'required|min:5|max:255|unique:users',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:6'
        ]);
        $validatedData['password'] = Hash::make($validatedData['password']);
        User::create($validatedData);
        return redirect('/login')->with('success','Registrasi berhasil, silahkan login');
    }
}
