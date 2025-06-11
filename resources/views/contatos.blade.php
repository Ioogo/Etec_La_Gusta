<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulário com Bootstrap</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
        <style>
            
            .navbar-custom {
                background-color: #b20000;
            }

            .navbar-custom .navbar-brand, .navbar-custom .nav-link {
                color: white;
            }

            .navbar-custom .navbar-brand:hover, .navbar-custom .nav-link:hover {
                color: #ffb3b3;
            }

            .btn {
                background-color: #b20000
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

    <div class="container mt-5">
        <h2>Formulário de Cadastro</h2>
        <form>
            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" placeholder="Digite seu nome">
            </div>            
            <div class="mb-3">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" class="form-control" id="email" placeholder="Digite seu e-mail">
            </div>            
            <div class="mb-3">
                <label for="senha" class="form-label">Senha</label>
                <input type="password" class="form-control" id="senha" placeholder="Digite sua senha">
            </div>  
            <div class="mb-3">
                <label for="time" class="form-label">Time</label>
                <input type="text" class="form-control" id="nome" placeholder="Digite seu time, se não for Vasco vai pro caralho">
            </div>  
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    </body>
</html>
