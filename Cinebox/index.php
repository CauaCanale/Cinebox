<?php 
require './classes/Filmes.php';

$titulo = 'CINEBOX - Inicio';
include './includes/header.php';
include './includes/banner.php';


$filmes = new Filmes();
$dados = $filmes -> listarFilmesBanco(); 

echo $dados;

include './includes/listar_filmes.php';

include './includes/footer.php';