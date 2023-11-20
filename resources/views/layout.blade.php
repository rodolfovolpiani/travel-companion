<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>TravelCompany</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <header>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" width="220" height="28" class="d-inline-block align-text-top">
            </a>

            
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/">Página Inicial</a></li>
                        <li><a class="dropdown-item" href="/profile">Perfil</a></li>
                        <li><a class="dropdown-item" href="/my-profile">Meu Perfil</a></li>
                        <li><a class="dropdown-item" href="/travels">Viagens disponíveis</a></li>
                        <li><a class="dropdown-item" href="/login">Entrar</a></li>
                        <li><a class="dropdown-item" href="/register">Registrar</a></li>
                    </ul>
                </li>
            </ul>

            <a class="btn btn-outline-success me-2" href="/login" role="button">Entrar</a>
            <!--<form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>-->
        </div>
    </nav>
    </header>

    <div class="container">
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
        @yield('content')
    </div>

    <footer class="navbar-fixed-bottom align-items-center py-3 my-4 border-top"
            style="text-align: -webkit-center; position: absolute; bottom: 0; width: 100%;">
        <div class="col-md-4 align-items-center" >
        <span class="mb-3 mb-md-0 text-muted">© 2023 TravelCompany</span>
        </div>
    </footer>
</body>
</html>
