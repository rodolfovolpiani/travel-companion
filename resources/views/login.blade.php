@extends('layout')

@section('content')
<div class="login-container">
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="mb-3">
            <label for="email" class="mb-2">E-mail</label>
            <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="password" class="mb-2">Senha</label>
            <input type="password" name="password" class="form-control" id="password">
        </div>

        <div class="row mb-4">
          <div class="col d-flex justify-content-center">
            <!-- Checkbox -->
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="remember" id="keepConnected" checked="">
              <label class="form-check-label" for="keepConnected"> Mantenha-me conectado </label>
            </div>
          </div>

          <div class="col">
            <!-- Simple link -->
            <a href="#!">Esqueceu a senha?</a>
          </div>
        </div>
        <button type="submit" class="btn btn-primary btn-login btn-block center">Entrar</button>
        
        <p class="mt-5 center-content">Não possui conta? <a href="{{ route('register') }}">Registre-se</a></p>
    </form>
</div>
@endsection
