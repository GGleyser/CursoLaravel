<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ModelCurso;

class ControllerCurso extends Controller
{
    public function Index()
    {
        $data = ModelCurso::all();
        return view('admin.cursos.index', compact('data'));
    }

    public function Adicionar()
    {
        return view('admin.cursos.adicionar');
    }
}
