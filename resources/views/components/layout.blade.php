<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a href="{{ route('series.index') }}" class="navbar-brand">Séries</a>

            @auth
            <a href="{{ route('logout') }}" class="btn btn-secondary">Sair</a>
            @endauth
            
            @guest
            <div>
                <a href="{{ route('login') }}" class="btn btn-secondary">Entrar</a>
                <a href="{{ route('users.create') }}" class="btn btn-secondary">Registrar</a>
            </div>
            @endguest
        </div>
    </nav>

    <div class="container">
        <h1 class="mt-3">{{ $title }}</h1>
        
        @isset($mensagemSucesso)
        <div class="alert alert-success">
            {{ $mensagemSucesso }}
        </div>
        @endisset

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        {{ $slot }}
    </div>
</body>
</html>