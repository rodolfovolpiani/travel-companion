@extends('layout')

@section('content')
<div class="profile-container">
    <h2>Editar Perfil</h2>
    <form method="POST">
        @csrf
        @method('PUT')
        <!-- Campos de edição do perfil aqui -->
        <button type="submit">Salvar</button>
    </form>
</div>
@endsection
