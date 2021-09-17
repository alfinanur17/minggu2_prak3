<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdiController extends Controller
{
    public function mi(){
        return view('prodi.mi');
    }

    public function ti(){
        return view('prodi.ti');
    }
}
