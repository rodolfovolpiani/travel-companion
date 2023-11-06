@extends('layout')

@section('content')
<div class="create-item-container">
    <h2>Criar um Novo Item</h2>
    <form method="POST" action="{{ route('item.store') }}">
        @csrf
        <input type="text" name="name" placeholder="Nome" required>
        <input type="text" name="description" placeholder="Descrição" required>
        <input type="number" name="price" placeholder="Preço" required>
        <input type="text" name="category" placeholder="Categoria" required>
        <input type="number" name="quantity" placeholder="Quantidade" required>
        <button type="submit">Criar Item</button>
    </form>
</div>
@endsection
