<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>João Victor</title>

    @vite(['resources/css/app.scss', 'resources/js/app.js'])
</head>
<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top border-bottom border-secondary">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">João Victor</a>
            <div class="d-flex">
                <li class="nav-item">
                    <a class="nav-link" href="#projetos">Sobre</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#projetos">Projetos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#projetos">Contato</a>
                </li>
            </div>
        </div>
    </nav>
    <main>
        @yield('content')
    </main>

</body>
</html>