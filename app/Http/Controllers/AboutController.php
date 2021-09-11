<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about() {
        return "Jurusan Teknologi Informasi Polinema";
    }
}
