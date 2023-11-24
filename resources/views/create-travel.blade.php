@extends('layout')

@section('content')
<div class="create-item-container">
    <h2>Cadastre sua nova viagem</h2>
    <form method="POST" action="{{ route('item.store') }}">
        @csrf
        <input type="text" name="destiny" placeholder="Destino" required>
        <input type="date" name="initialDate" placeholder="Data ida" required>
        <input type="text" name="preference" placeholder="Preferência" required>
        <input type="date" name="finalDate" placeholder="Data volta" required>
        <button type="submit">Cadastrar viagem</button>
    </form>
</div>
@endsection
