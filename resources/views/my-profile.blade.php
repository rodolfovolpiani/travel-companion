@extends('layout')

@section('content')
<div class="profile-container">

    <br>
    <h2>Meu Perfil</h2>

    <br><br>
    <p>{{auth()->user()->name}}</p>
    @php
        $dataNascimento = auth()->user()->data_nascimento;
        $idade = date_diff(date_create($dataNascimento), date_create('now'))->y;
    @endphp
    <p>{{ $idade }} anos</p>
    <hr>

    <p>{{auth()->user()->email}}</p>
    <hr>

    <div class="form-group">
        <label for="exampleFormControlTextarea1">Sobre você</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
    </div>
    <br>

    <div class="form-group">
        <label for="exampleInputEmail1">Locais de interesse</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <br>

    <div class="form-group">
        <label for="exampleInputEmail1">O que gosto de fazer nas viagens</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <br>

    <div class="form-group">
        <label for="exampleInputEmail1">Viagens que participei</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <br>

    <a class="btn btn-primary" href="/edit-profile" role="button">Editar</a>
</div>
@endsection
