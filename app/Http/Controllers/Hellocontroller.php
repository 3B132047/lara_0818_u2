<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class Hellocontroller extends Controller
{
    public function index($name = 'Everybody')
    {
        $data = ['name' => $name ];

        return view('hello.index', $data);
    }
}