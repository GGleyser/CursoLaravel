<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerContato extends Controller
{
    public function Index()
    {
        return view('contato');
    }
    public function Create(Request $data)
    {
        dd($data->all());
        // return view('contato');
    }
    public function Alter()
    {
        return view('contato');
    }
}
