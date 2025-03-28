<?php 

class Filmes {
    public function ExibirDetalhesFilmes(){
        $idFilmes = $_GET['id'];

        $dsn = 'mysql:dbname=db_cinebox;host=127.0.0.1';
        $user = 'root'; 
        $password = '';

        $banco = new PDO($dsn, $user, $password);

        $script = "SELECT * FROM tb_filmes WHERE id = $idFilmes";

        return $banco->query($script)->fetch();
    }
}