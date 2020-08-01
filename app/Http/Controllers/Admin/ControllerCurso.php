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

    public function Editar($id)
    {
        $dados = ModelCurso::find($id);
        return view('admin.cursos.editar', compact('dados'));
    }

    public function Salvar(Request $r)
    {
        // $dados = $r->all();

        // if(isset($dados['publicado']))
        //     $dados['publicado'] = 'sim';
        // else
        //     $dados['publicado'] = 'nao';


        // if($r->hasFile('imagem'))
        // {
        //     $img = $r->file('imagem');
        //     $num = rand(0000,9999);
        //     $dir = "img/cursos/";
        //     $ext = $img->guessClientExtension();

        //     $imgNome = $num . "." . $ext;
        //     $img->move($dir, $imgNome);

        //     $dados['imagem'] = $dir ."/". $imgNome;
        // }
        $dados = $this->ChangeData($r);

        ModelCurso::create($dados);

        return redirect()->route('admin.cursos');

    }

    protected function ParsePublicado($publicado)
    {
        if (isset($publicado))
            $publicado = 'sim';
        else
            $publicado = 'nao';

        return $publicado;
    }

    protected function MoveImagem($img)
    {
        $num = rand(0000, 9999);
        $dir = "img/cursos/";
        $ext = $img->guessClientExtension();

        $imgNome = $num . "." . $ext;
        $img->move($dir, $imgNome);

        return $dir . "/" . $imgNome;
    }

    function ChangeData($r)
    {
        $dados = $r->all();

        $dados['publicado'] = $this->ParsePublicado($dados['publicado']);

        if ($r->hasFile('imagem')) {
            $img = $r->file('imagem');
            $dados['imagem'] = $this->MoveImagem($img);
        }

        return $dados;
    }

    public function Atualizar(Request $r, $id)
    {
        $dados = $this->ChangeData($r);

        ModelCurso::find($id)->update($dados);

        return redirect()->route('admin.cursos');
    }
    
    public function Remover($id)
    {
        ModelCurso::find($id)->delete();
    
        return redirect()->route('admin.cursos');
    }
}
