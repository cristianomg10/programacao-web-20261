@extends('layouts.app')

@section('content')
<h1>Nova Cidade</h1>

<form action="{{ route('cidades.store') }}" method="POST">
    @csrf

    <input type="text" name="nome" placeholder="Nome" class="form-control mb-2">
    <input type="text" name="estado" placeholder="Estado" class="form-control mb-2">

    <button class="btn btn-success">Salvar</button>
</form>
@endsection