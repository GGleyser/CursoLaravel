
@foreach($data as $dados)
    <h1>{{ $dados->first() }}</h1>
    <h1>{{ dd($dados) }}</h1>
@endforeach