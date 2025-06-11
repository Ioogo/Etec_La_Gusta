<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cursos - ETEC ZL</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <style>
        .container {
            margin-top: 50px;
        }
        .header {
            text-align: center;
            margin-bottom: 30px;
        }
        .course-info {
            background-color: #f8f9fa;
            border: 1px solid #ddd;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 5px;
        }
        .course-info h4 {
            color: #b20000;
        }
        .course-info p {
            color: black;
        }

        .navbar-custom {
                background-color: #b20000;
            }

            .navbar-custom .navbar-brand, .navbar-custom .nav-link {
                color: white;
            }

            .navbar-custom .navbar-brand:hover, .navbar-custom .nav-link:hover {
                color: #ffb3b3;
            }
    </style>
</head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom">
            <div class="container-fluid">
                <a class="navbar-brand" href="/"><img src="/imagens/Etec_logo.svg" alt="Logo" height="40" width="100"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/cursos">Cursos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/departamentos">Departamentos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/contatos">Contatos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-disabled="true" href="https://www.youtube.com/watch?v=mKPeEpUbzlA">Vasco</a>
                        </li>
                        <li>
                        @if (Route::has('login'))
                <nav class="flex items-center justify-end gap-4">
                    @auth
                        <a
                            href="{{ url('/dashboard') }}"
                            class="nav-link" aria-disabled="true">                        
                            Dashboard
                        </a>
                    @else
                    </li>
                    <li>
                        <a
                            href="{{ route('login') }}"
                            class="nav-link" aria-disabled="true"
                        >
                            Log in
                        </a>
                    </li>
                    <li>
                        @if (Route::has('register'))
                            <a
                                href="{{ route('register') }}"
                                class="nav-link" aria-disabled="true">
                                Register
                            </a>
                        @endif
                    @endauth
                    </li>
                </nav>
            @endif
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container">
            <div class="header">
                <h1>Departamentos da ETEC ZONA LESTE</h1>
                <p></p>
            </div>

            <div class="course-info">
                <h4>Departamentos públicos</h4>
                <p>Aqui é só os departamentos que geral conhece, pra professor, secretaria e outros conhecidos</p>
            </div>

            <div class="course-info">
                <h4>Departamentos obscuros</h4>
                <p>O dinheiro da Amanda quase vem disso aqui(Churrasco de gato, foodTruck e outros)</p>
            </div>

            <div class="text-center">
                <a href="/" class="btn btn-danger">Voltar para a Home</a>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
