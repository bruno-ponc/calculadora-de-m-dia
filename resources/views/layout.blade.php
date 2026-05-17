<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1">

    <title>Sistema Escolar</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">

    <link rel="stylesheet"
          href="{{ asset('css/style.css') }}">

</head>


<body>

    

    <nav class="navbar navbar-expand-lg navbar-dark">

        <div class="container-fluid">

            <a class="navbar-brand fw-bold"
               href="/">

                Início

            </a>

            <button class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#menu">

                <span class="navbar-toggler-icon"></span>

            </button>

            <div class="collapse navbar-collapse"
                 id="menu">

                <ul class="navbar-nav ms-auto">

                    <li class="nav-item">

                        <a href="/turmas/create"
                           class="nav-link">

                            Turmas

                        </a>

                    </li>

                    <li class="nav-item">

                        <a href="/alunos/create"
                           class="nav-link">

                            Alunos

                        </a>

                    </li>

                    <li class="nav-item">

                        <a href="/notas/create"
                           class="nav-link">

                            Notas

                        </a>

                    </li>

                    <li class="nav-item">

                        <a href="/notas"
                           class="nav-link">

                            Boletim

                        </a>

                    </li>

                    <li class="nav-item">

                        <a href="/resumo"
                           class="nav-link">

                            Resumo

                        </a>

                    </li>

                </ul>

            </div>

        </div>

    </nav>

    

    <main class="container py-4 flex-grow-1">

        @yield('content')

</main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

<footer class="footer mt-5">

    <main class="container text-center">

        <p class="mb-0">

            © 2026 Sistemas de Informação | Desenvolvimento de Aplicações para WEB II

        </p>

</main>

</footer>

</html>