@extends('layout')

@section('content')
<div class="profile-container">
    <br>
    <h2>Perfil</h2>

    <br><br>
    <p>João Pedro</p>
    <p>18 anos</p>
    <hr>

    <p>j**************@gmail.com</p>
    <p>+551*********</p>
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
</div>
@endsection
