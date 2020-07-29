<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerContato extends Controller
{
    public function Index()
    {
        $data = [
            (object) ['gabriel', 'dany', 'paty', 'robs'],
            (object) ['gabriel', 'dany', 'paty', 'robs'],
        ];
        return view('contato', ['data' => $data]);
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
