<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>João Victor | Developer</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@7.3.2/css/flag-icons.min.css" />

    @vite(['resources/css/app.scss', 'resources/js/app.js'])

    <style>
        @media (min-width: 992px) {
            .sticky-column {
                position: sticky;
                top: 0;
                height: 100vh;
            }
        }

        .nav-link-custom {
            font-size: 0.75rem;
            font-weight: 700;
            letter-spacing: 0.1em;
            text-decoration: none;
            color: var(--nav-link-color);
            transition: 0.3s;
        }

        .nav-link-custom:hover {
            padding-left: 10px;
            color: var(--text-color);
        }
    </style>
</head>

<body class="bg-color text-color">

    <div class="container">
        <div class="row">
            <aside class="col-lg-3 sticky-column d-flex flex-column justify-content-between py-5">
                <div>
                    <div class="mt-5 d-none d-lg-block">
                        <div>
                            <h1 data-i18n="hero-name"></h1>
                            <span data-i18n="hero-role"></span>
                        </div>

                        <br>

                        <nav class="nav flex-column">
                            <a class="nav-link-custom py-2" href="#sobre" data-i18n="nav-sobre"></a>
                            <a class="nav-link-custom py-2" href="#carreira" data-i18n="nav-carreira"></a>
                            <a class="nav-link-custom py-2" href="#contato" data-i18n="nav-contato"></a>
                        </nav>
                    </div>
                </div>

                <div class="d-flex gap-3 fs-3">
                    <a href="https://github.com/oliveiravz" class="text-reset" target="_blank"><i
                            class="bi bi-github"></i></a>
                    <a href="https://www.linkedin.com/in/jvictoroliveira94/" class="text-reset" target="_blank"><i
                            class="bi bi-linkedin"></i></a>
                    <a href="https://www.instagram.com/joao.omota/" class="text-reset" target="_blank"><i
                            class="bi bi-instagram"></i></a>
                    <a href="https://www.facebook.com/joao.victor.868209/" class="text-reset" target="_blank"><i
                            class="bi bi-facebook"></i></a>
                </div>
            </aside>

            <div class="col-lg-7">
                @yield('content')
            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>