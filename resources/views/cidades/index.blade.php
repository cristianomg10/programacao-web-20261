@extends('layouts.app')

@section('content')
<h1>Lista de Cidades</h1>

<a href="#" class="btn btn-primary mb-3">Nova Cidade</a>

<table class="table">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Estado</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Exemplo</td>
            <td>SC</td>
        </tr>
    </tbody>
</table>
@endsection