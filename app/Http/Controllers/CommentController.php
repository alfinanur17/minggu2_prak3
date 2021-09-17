<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function comment($name,$pesan) {
        return view('comment', ['nama' => $name, 'pesan' => $pesan]);
    }
}
