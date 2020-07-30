<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerContato extends Controller
{
    public function Index()
    {
        $data = new \App\ModelContato();
      
        return view('contato', ['data' => $data->Lista()]);
    }
    public function Create(Request $data)
    {
        // dd($data->all());
        return view('contato', compact('data'));
    }
    public function Alter()
    {
        return view('contato');
    }
}
