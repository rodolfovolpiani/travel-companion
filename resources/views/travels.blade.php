@extends('layout')

@section('content')
<div class="items-container">
    <br>
    <h2>Viagens disponíveis</h2>
    <br>
    <input class="form-control" id="myInput" type="text" placeholder="Pesquise...">
    <table class="table table-striped">
        <thead>
            <tr>
            <th scope="col">Viajante</th>
            <th scope="col">Origem</th>
            <th scope="col">Partida</th>
            <th scope="col">Destino</th>
            <th scope="col">Volta</th>
            </tr>
        </thead>
        <tbody id="myTable">
            <tr>
            <td>João</td>
            <td>Ubatuba - SP</td>
            <td>01/01/2024</td>
            <td>Roma</td>
            <td>01/02/2024</td>
            </tr>
            <tr>
            <td>Gabriel</td>
            <td>Tubarão - SC</td>
            <td>01/01/2024</td>
            <td>Nova Iorque</td>
            <td>01/03/2024</td>
            </tr>
            <tr>
            <td>Samuca do Java</td>
            <td>Porto Alegre - RS</td>
            <td>01/01/2024</td>
            <td>Madrid</td>
            <td>01/04/2024</td>
            </tr>
        </tbody>
    </table>
</div>

<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

@endsection
