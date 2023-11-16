<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function regis(){
        return view('halaman.register');
    }
    public function table(){
        return view('halaman.table');
    }
    public function kirim(Request $request){
        $nama = $request['firstname'];
        $gender = $request['gender'];

        return view('halaman.welcome', ['name'=> $nama, 'gender'=>$gender]);
    }
}
