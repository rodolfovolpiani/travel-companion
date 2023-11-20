@extends('layout')

@section('content')
<div class="login-container">

    <!-- Exibição de mensagens de erro -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Exibição de mensagem de sucesso -->
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <form method="POST" action="{{ route('user.store') }}">
        @csrf
        <div class="mb-3">
            <label for="email" class="mb-2">Qual é o seu e-mail?</label>
            <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="E-mail">
        </div>

        <div class="mb-3">
            <label for="name" class="mb-2">Qual é o seu nome?</label>
            <input type="text" name="name" class="form-control mb-2" id="name" aria-describedby="nameHelp" placeholder="Nome">
            <input type="text" name="last_name" class="form-control" id="lastName" aria-describedby="lastNameHelp" placeholder="Sobrenome">
        </div>

        <div class="mb-3">
            <label for="birthDate" class="mb-2">Qual é a sua data de nascimento?</label>
            <input type="date" name="data_nascimento" class="form-control mb-2" id="birthDate" aria-describedby="birthDateHelp" placeholder="dd/mm/aa">
        </div>
        
        <div class="mb-3">
            <label for="password" class="mb-2">Defina sua senha</label>
            <input type="password" name="password" class="form-control mb-2" id="password" placeholder="Senha">
            <input type="password" name="password_confirmation" class="form-control" id="confirmPassword" placeholder="Confirme sua senha">
        </div>

        <div class="">
          
        </div>
        <button type="submit" class="btn btn-primary btn-login btn-block center mt-4">Salvar</button>
    </form>
</div>
@endsection
