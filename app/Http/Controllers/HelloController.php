<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index($name = 'world')
    {
        return view('hello', ['n'=>$name]);
    }

    public function render(Request $request)
    {
        return 'Hello ' . $request->input('name');
    }
}
