<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
$nome = "Nome do conteudossss";

$mysql_id = new mysqli('localhost', 'root', '');
$db = mysqli_select_db($mysql_id, 'smi_final');

if ($db != 0) {
    session_start();
    if (isset($_SESSION['id'])) {
        header("Location: feed.php");
    } else {
        header("Location: homePage.php");
    }
} else {
    include "database_processing.php";
    databaseCreation();
    databaseInitiation();
    header("Location: index.php");
}
?>


<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <title>SMI exemplos</title>
    </head>
    <body>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <a class="navbar-brand" href="#">Game Along</a>
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Início <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Jogos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sub-Categorias</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Procurar um conteúdo" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Procurar</button>
                </form>
            </div>
        </nav>

        <p><a href="ConteudoEspecifico.php">Conteudo Especifico</a></p>
        <p><a href="PerfilPublico.php">Perfil Público</a></p>
        <p><a href="Feed.php">Feed</a></p>
        <p><a href="ConfiguracaoPerfil.php">Configuracao Perfil</a></p>
        <p><a href="Upload.php">Upload</a></p>
        <p><a href="Categorias.php">Categorias</a></p>
        <p><a href="SubCategorias.php">Sub-Categorias</a></p>
        <p><a href="Notificacoes.php">Notificações</a></p>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>
