<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FooController extends Controller
{
    // foo4アクションを追加
    public function foo4()
    {
        return view('foo.foo4', [
            'title' => 'Foo4',
            'body' => 'Hello World!'
        ]);
    }
}
