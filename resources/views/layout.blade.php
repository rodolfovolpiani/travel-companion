<!DOCTYPE html>
<html>
<head>
    <title>Travel Companion</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header>
        <nav class="navbar">
            <ul>
                <li><a href="/">Página Inicial</a></li>
                <li><a href="/profile">Meu Perfil</a></li>
                <li><a href="/items">Itens Disponíveis</a></li>
                <li><a href="/login">Entrar</a></li>
                <li><a href="/register">Registrar</a></li>
            </ul>
        </nav>
    </header>

    <div class="container">
        @yield('content')
    </div>

    <footer>
        <!-- Rodapé aqui -->
    </footer>
</body>
</html>
