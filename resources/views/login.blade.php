@extends('layout')

@section('content')
<div class="login-container">
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <label for="email">Email</label>
        <input type="email" name="email" required>
        <label for="password">Senha</label>
        <input type="password" name="password" required>
        <button type="submit">Entrar</button>
    </form>
</div>
@endsection
