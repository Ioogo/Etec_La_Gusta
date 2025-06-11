<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Se louco, ter que refazer a etec é zoado</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"/>

        <style>
            .home-banner {
                background-image: url('/imagens/BLOCO-A.jpg'); 
                background-size: cover;
                background-position: center;
                height: 500px;
                display: flex;
                justify-content: center;
                align-items: center;
                color: white;
                text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
                font-size: 2rem;
                text-align: center;
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

            .home-banner a {
                color: white; 
                text-decoration: none;
            }

            .home-banner a:hover {
                color: #ffb3b3; 
                text-decoration: underline; 
            }

            .card-custom {
                border: 2px solid #b20000;  
                color: black; 
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                margin: 10px 0;
            }

            .card-custom .card-body {
                text-align: center;
            }

            .card-custom .card-title {
                font-size: 1.5rem;
                font-weight: bold;
                color: #b20000;
            }

            .card-custom .card-text {
                font-size: 1.1rem;
            }

            .card-custom a {
                color: #b20000;
                text-decoration: none;
            }

            .card-custom a:hover {
                color: #ffb3b3;
            }

            .cadastros {
                display: flex;
                align-items: end;
            }
            
        </style>
    </head>
    <body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

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
                    <div class="cadastros">
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
                    </div>
                    
                </nav>
            @endif
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="home-banner">
            <h1>Este é um site não oficial feito por um preguiçoso, mas saiba que eu não tanko essa escola, se essa droga não me matar, vai ser o Vasco que vai acabar comigo</h1>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card card-custom">
                        <div class="card-body">
                            <h5 class="card-title">Contatos</h5>
                            <p class="card-text">Entre em contato conosco através dos canais disponíveis.</p>
                            <a href="/contatos" class="btn btn-outline-danger">Saiba mais</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4 mb-4">
                    <div class="card card-custom">
                        <div class="card-body">
                            <h5 class="card-title">Cursos</h5>
                            <p class="card-text">Descubra os cursos oferecidos pela ETEC.</p>
                            <a href="/cursos" class="btn btn-outline-danger">Veja os cursos</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="card card-custom">
                        <div class="card-body">
                            <h5 class="card-title">Departamentos</h5>
                            <p class="card-text">Saiba mais sobre os departamentos e suas funções.</p>
                            <a href="/departamentos" class="btn btn-outline-danger">Saiba mais</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>
