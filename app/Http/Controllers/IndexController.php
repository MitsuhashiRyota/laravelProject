<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    // Index View
    public function index() {
        return view('home.home', [
            'title' => 'Home画面',
            'body' => 'Hello! Index!!'
        ]);
    }
}
