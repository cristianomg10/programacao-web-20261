@extends('main')

@section('titulo', 'Lista de Produtos')

@section('conteudo')
<h1>Produtos</h1>
@if(session()->has('mensagem'))
<div class="alert alert-info">{{ session('mensagem') }}</div>
@endif

<div>
    <form method="GET" action="#" class="d-flex">
        <input type="text" name="pesquisa" class="form-control" placeholder="Termo de pesquisa" style="width: 300px;" value="{{ $pesquisa }}">

        <input type="radio" class="btn-check" name="ordem" id="asc" autocomplete="off" {{ ( $ordem == "crescente" ? "checked" : "") }} value="crescente">
        <label class="btn btn-secondary" for="asc"><i class="bi bi-sort-alpha-down"></i></label>
    
        <input type="radio" class="btn-check" name="ordem" id="desc" autocomplete="off" {{ ( $ordem == "decrescente" ? "checked" : "") }} value="decrescente">
        <label class="btn btn-secondary" for="desc"><i class="bi bi-sort-alpha-down-alt"></i></label>

        <input type="submit" class="btn btn-primary">
    </form>
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Estoque</th>
            <th>Valor</th>
            <th>Categoria</th>
            <th>Data criação</th>
            <th>Operações</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($produtos as $p)
        <tr> 
            <td>{{ $p->id }}</td>
            <td>{{ $p->nome }}</td>
            <td>{{ $p->estoque }}</td>
            <td>{{ $p->valor }}</td>
            <td>{{ $p->categoria->nome ?? "" }}</td>
            <td>{{ $p->created_at }}</td>
            <td>
                <a href="{{ route('prod.edit', ['id' => $p->id]) }}" 
                    class="btn btn-warning">
                    Alterar</a>
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalDelete{{ $p->id }}">
                Excluir
                </button>
            </td>
        </tr>
        <div class="modal fade" id="modalDelete{{ $p->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Confirme exclusão</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Deseja realmente excluir o item <b>{{$p->nome}}</b>?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    <a href="{{ route('prod.delete', ['id' => $p->id]) }}" class="btn btn-outline-danger">Confirmar exclusão</a>
                </div>
                </div>
            </div>
            </div>
        @endforeach
    </tbody>
</table>

{{ $produtos->links('pagination::bootstrap-4') }}

<div>
    <a class="btn btn-success" 
        href="{{ route('prod.novo') }}">
        Novo produto</a>
</div>
@endsection