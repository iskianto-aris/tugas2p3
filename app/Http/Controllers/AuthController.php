<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function Form(){
        return view('form');
    }

    public function proses(Request $request){
        $nama_depan    = $request->input('nama_depan');
     	$nama_belakang = $request->input('nama_belakang');
        $data = [
                    'depan'     => $nama_depan,
                    'belakang'  => $nama_belakang,
                ];
        return view('welcome' , $data);
    }
}
