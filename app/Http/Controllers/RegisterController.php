<?php

namespace App\Http\Controllers;

use Session;
use Validator;
use App\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register(){
      return view('frontend.register');
    }

    public function proccessRegister(Request $r){
      $validator = Validator::make($r->all(), [
        'nama' => 'required',
        'email' => 'required',
        'password' => 'required',
        'alamat' => 'required',
        'no_telp' => 'required'
      ]);

      if (!$validator->fails()) {
        $check_email = User::where('email','=',$r->email)->first();
        if ($check_email == null) {
          $user = User::create([
            'nama' => $r->nama,
            'email' => $r->email,
            'password' => bcrypt($r->password),
            'alamat' => $r->alamat,
            'no_telp' => $r->no_telp
          ]);

          Session::flash('success', 'Registrasi anda berhasil dilakukan!');
          return redirect('/register');
        }else{
          Session::flash('error', 'Email '.$r->email.' Sudah digunakan!');
          return redirect()->back()->withInput();
        }
      }else{
        Session::flash('error', $validator->messages()->first());
        return redirect()->back()->withInput();
      }
    }
}
