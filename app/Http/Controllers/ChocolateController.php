<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChocolateController extends Controller
{
    public function index()
    {
        return view('chocolate.chocolate');
    }

    public function show($id)
    {
        return view('chocolate.chocolatest')->with(compact('id'));
    }
}
