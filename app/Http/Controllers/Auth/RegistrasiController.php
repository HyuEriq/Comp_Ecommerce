<?php

namespace App\Http\Controllers\auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Repositories\RegisterRepository;
use App\Http\Requests\RegisterSaveRequest;

class RegistrasiController extends Controller
{
   public function index(){
      return view('User.auth.registrasi',[
        'tittle' => 'Registrasi'
      ]);
  }

  public function registrasi_proses(Request $request){
      $data = $request->validate([
          'name' => 'required|max:255',
          'email' => 'required|email|unique:users,email',
          'password' => 'required|min:5|max:255',
      ]);

      $data['password'] = Hash::make($request->password);

      $proses = User::create([
          'name' => $data['name'],
          'email' => $data['email'],
          'password' => $data['password'],
          'updated_at' => null
      ]);

      if($proses){
          return redirect('/Login')->with('success', 'Registration successfull !!');

      }else{
          return redirect()->back()->with('failed', 'Registrasi Gagal');
      }

  }

}
