<?php
require './classes/Consultar.php';
require './classes/Generos.php';
include './includes/header.php';


$idFilmes = $_GET['id'];

$filme = new Filmes();
$value = $filme->ExibirDetalhesFilmes();

$bob = new Generos();
$valueGeneros = $bob->consultarGeneroByIdFilme($idFilmes);

if (isset($_GET['id']) && !empty($_GET['id'])) {
    
    include './includes/filmes_detalhe.php';
} else {
    header('location:index.php');
}

include_once './includes/footer.php'

?>