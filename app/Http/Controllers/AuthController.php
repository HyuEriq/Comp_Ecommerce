<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function view_login(){

        return view('User.auth.login');
    }

    public function login_proses(Request $request){
        $data = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if(Auth::attempt($data)){
            return redirect()->route('Dashboard');
        }else{
            return back()->with('failed', 'Email dan Password Anda Salah');
        }

    }

    public function view_registrasi(){
        return view('User.auth.registrasi');
    }

    public function registrasi_proses(Request $request){

        $data = $request->validate([
            'name' => 'required|min:5',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8'
        ]);

        $data['password'] = Hash::make($request->password);

        User::create($data);

        $login = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if(Auth::attempt($login)){
            return redirect()->route('login');
        }else{
            return back()->with('failed','Gagal Regitrasi Silakan Masukan Registrasi Lagi');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login')->with('success','Anda Berhasi Logout');
    }
}
