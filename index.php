<?php 
require './classes/Filmes.php';
require './classes/Generos.php';

$titulo = 'CINEBOX - Inicio';
include './includes/header.php';
include './includes/banner.php';


$filmes = new Filmes();
$dadosFilmes = $filmes -> exibirListaFilmes(12); 

$bob = new Generos();
$dadosGeneros = $bob->consultarListaGeneros();

include './includes/listar_filmes.php';

include './includes/footer.php';