@extends('layout.main')

@section('title', 'Cursos')
@section('main_content')
<div class="container">

    <h1 class="center">Editar curso</h1>

    <div class="row">
        <form action="{{ route('admin.cursos.atualizar', $dados->id) }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="put">
            @include('admin.cursos.partial.adicionarCurso')
            <button class="btn red" type="submit">Atualizar</button>
        </form>
    </div>

</div>
@endsection