<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index(){
        $hello = "hello world!";
        return view('welcome', compact('hello'));
    }
}
