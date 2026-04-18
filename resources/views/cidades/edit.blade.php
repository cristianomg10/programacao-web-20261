@extends('layouts.app')

@section('content')
<h1>Editar Cidade</h1>

<form action="{{ route('cidades.update', $cidade->id) }}" method="POST">
    @csrf
    @method('PUT')

    <input type="text" name="nome" value="{{ $cidade->nome }}" class="form-control mb-2">
    <input type="text" name="estado" value="{{ $cidade->estado }}" class="form-control mb-2">

    <button class="btn btn-success">Atualizar</button>
</form>
@endsection