<div class="input-field">
    <input type="text" name="title" id="titulo" value="{{ isset($dados->tilulo) ? $dados->tilulo : '' }}">
    <label for="titulo">Titulo</label>
</div>

<div class="input-field">
    <input type="number" name="descricao" id="descricao" value="{{ isset($dados->descricao) ? $dados->descricao : '' }}">
    <label for="descricao">Descrição</label>
</div>

<div class="file-field input-field">

    <div class="btn blue">
        <span>imagem</span>
        <input type="file" name="imagem">
    </div>

    <div class="file-path-wrapper">
        <input class="file-path validate" type="text">
    </div>

</div>

@if(isset($dados->imagem))

    <div class="input-field">
        <img width="100" height="100" src={{ asset('$dados->imagem') }}> </div>
    </div>

@endif

<div class="">
    <label>
        <input type="checkbox" checked="checked" {{ isset($dados->publicado) && $dados->publicado == 'sim' ? 'checked' : '' }} />
        <span>publicado</span>
    </label>
</div>