<?php ?>

<!doctype html>
<html lang="pt-br">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">

        <title>Gerenciador de Jogos</title>
    </head>
    <body>
        <!--MENU DE NAVEGAÇÃO -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Scoreboard</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only"></span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Tabelas</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Cadastrar
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Times</a>
                            <a class="dropdown-item" href="#">Modalidades</a>
                            <a class="dropdown-item" href="#">Partidas</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Partidas
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Inserir resultado</a>
                            <a class="dropdown-item" href="#">Visualizar resultados</a>
                            <a class="dropdown-item" href="#">Classificação</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <!--MENU DE NAVEGAÇÃO-->
    <!--CONTEÚDO DO SITE - BOTÕES DE REDIRECIONAMENTO-->
    <div class="container mt-5 pt-3">
        <h1 class="mb-5">Gerenciador de Jogos</h1>
        <div class="row">
            <div class="col-sm">
                <button type="button" class="btn btn-primary btn-lg btn-block">
                    <h6 class="text-left">Times</h6>
                    <h2>Ver times cadastrados</h2>              
                </button>
            </div>
            <div class="col-sm">
                <button type="button" class="btn btn-success btn-lg btn-block">
                    <h6 class="text-left">Modalidades</h6>
                    <h2>Todas as modalidades</h2>
                </button>
            </div>
            <div class="col-sm">
                <button type="button" class="btn btn-dark btn-lg btn-block">
                    <h6 class="text-left">Partidas</h6>
                    <h2>Partidas por modalidade</h2>
                </button>
            </div>
             <div class="col-sm">
                <button type="button" class="btn btn-danger btn-lg btn-block">
                    <h6 class="text-left">Jogos</h6>
                    <h2>Resultados<br>-></h2>
                </button>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
