<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller{
    public function profile(){
        $data = [
            'nama' => 'Muhamad Pandu Dwi Putra',
            'kelas' => 'A',
            'npm' => '2257051010'
        ];
        return view('profile', $data);
    }
}