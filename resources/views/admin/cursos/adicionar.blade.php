@extends('layout.main')

@section('title', 'Cursos')
@section('main_content')
<div class="container">

    <h1 class="center">Adicionar curso</h1>

    <div class="row">
        <form action="{{ route('admin.cursos.salvar') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            @include('admin.cursos.partial.adicionarCurso')
            <button class="btn red" type="submit">Salvar</button>
        </form>
    </div>

</div>
@endsection