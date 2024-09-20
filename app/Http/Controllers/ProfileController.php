<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
   // public function profile() //
//{ 
//return view('pofile'); 
//} 

public function profile()
    {
        $data = [
            'nama' => 'Muhamad Pandu Dwi Putra',
            'kelas' => 'A',
            'npm' => '2257051010'
        ];
        return view('pofile', $data);
    }

    // public function profile($nama= "", $kelas= "", $npm="")
    // {
    //     $data = [
    //         'nama' => $nama,
    //         'kelas' => $kelas,
    //         'npm' => $npm
    //     ];
    //     return view('profile', $data);
    // }
}

