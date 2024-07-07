<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index()
    {
        $name = '鈴木太郎';

        return view('hello', ['name' => $name]);
    }
}
