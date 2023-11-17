@extends('layout')

@section('content')
	<div class="container">
		<div id="carouselWelcome" class="carousel slide" data-bs-ride="carousel">
			<div class="carousel-indicators" style="width:100%">
				<button type="button" data-bs-target="#carouselWelcome" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
				<button type="button" data-bs-target="#carouselWelcome" data-bs-slide-to="1" aria-label="Slide 2"></button>
			</div>

			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="{{ asset('images/1slide.png') }}" class="d-block w-100" alt="...">
				</div>
				<div class="carousel-item">
					<img src="{{ asset('images/2slide.png') }}" class="d-block w-100" alt="...">
				</div>
			</div>

			<button class="carousel-control-prev" type="button" data-bs-target="#carouselWelcome" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			</button>

			<button class="carousel-control-next" type="button" data-bs-target="#carouselWelcome" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</button>
		</div>
	</div>
	
	<br><br><br>

	<div class="container">
        <div class="row">
			<div class="col-md-4">
				<h3>Viagens com preço baixo para você</h3>
				<p>Não importa para onde você vai, de ônibus ou de carona, encontre a viagem perfeita entre nossos vários destinos e trajetos, todos com preços baixos.</p>
			</div>
			
			<div class="col-md-4">
				<h3>Procure, clique e viaje!</h3>
				<p>Reservar uma viagem nunca foi tão fácil. Graças à nossa tecnologia e à simplicidade do app, você reserva sua viagem em poucos minutos.</p>
			</div>

			<div class="col-md-4">
				<h3>Confie em quem viaja com você</h3>
				<p>Para nós, é muito importante conhecer cada um de nosso membros e parceiros de ônibus. Conferimos as avaliações, perfis e documentações, assim você sempre sabe com quem vai viajar e pode ir tranquilo e seguro para seu próximo destino.</p>
			</div>
        </div>
	</div>
@endsection
