@extends('layouts.app')

@section('content')
<h1>Lista de Cidades</h1>

<a href="{{ route('cidades.create') }}" class="btn btn-primary mb-3">Nova Cidade</a>

<table class="table">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Estado</th>
        </tr>
    </thead>
    <tbody>
        @foreach($cidades as $cidade)
        <tr>
            <td>{{ $cidade->nome }}</td>
            <td>{{ $cidade->estado }}</td>
            <td>
    <a href="{{ route('cidades.edit', $cidade->id) }}" class="btn btn-warning">Editar</a>
</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection