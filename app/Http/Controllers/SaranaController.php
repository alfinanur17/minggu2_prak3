<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaranaController extends Controller
{
    public function perkantoran() {
        return view('sarana.perkantoran');
    }

    public function laboratorium() {
        return view('sarana.laboratorium');
    }

    public function kelas() {
        return view('sarana.kelas');   
    }

    public function lainnya() {
        return view('sarana.lainya');
    }
}
