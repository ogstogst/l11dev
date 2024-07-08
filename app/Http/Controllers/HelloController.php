<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index(Request $request)
    {
        $name = $request->input('name');

        return view('hello', ['name' => $name]);
    }
}
