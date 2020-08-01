@extends('layout.main')

@section('title', 'Cursos')
@section('main_content')
<div class="container">
    <h1 class="center">admin cursos</h1>

    <div class="row">
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Título</th>
                    <th>Descrição</th>
                    <th>Imagem</th>
                    <th>Publicado</th>
                    <th>Ação</th>
                </tr>
            </thead>

            <tbody>
                @foreach($data as $d)
                <tr>
                    <td>{{$d->id}}</td>
                    <td>{{$d->titulo}}</td>
                    <td>{{$d->descricao}}</td>
                    <td>
                        <img src={{ asset($d->imagem) }} height="100" width="100" alt="">
                    </td>
                    <td>{{$d->publicado}}</td>

                    <td>
                        <a class="btn deep-orange" href={{ route( 'admin.cursos.remover', $d->id ) }}>Deletar</a>
                        <a class="btn blue" href={{ route( 'admin.cursos.editar', $d->id ) }}>Alterar</a>
                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="row">
        <a class="btn green" href={{ route('admin.cursos.adicionar')}}>Adionar</a>
    </div>

</div>
@endsection