@extends('layout')

@section('content')
<div class="login-container">
    <form>
    <div class="mb-3">
        <label for="email" class="form-label">E-mail</label>
        <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Senha</label>
        <input type="password" class="form-control" id="password">
    </div>
    <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input center" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Mantenha-me conectado</label>
    </div>
    <button type="submit" class="btn btn-primary center">Login</button>
    </form>
</div>
@endsection
