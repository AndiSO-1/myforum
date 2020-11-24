<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        return 'test';
    }

    public function show($id)
    {
        // return view('test')->with(compact('id'));
        return view('test.test')->with(compact('id'));
    }
}
