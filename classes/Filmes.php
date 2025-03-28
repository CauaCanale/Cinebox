<?php 

class Filmes
{
    public $conexaoBanco;
    
    public function __construct() {
        $dsn = 'mysql:dbname=db_cinebox;host=127.0.0.1';
        $user = 'root'; 
        $password = '';

        $this->conexaoBanco= new PDO($dsn, $user, $password);
    }

    public function exibirListaFilmes($limite = '') {
            
            $script = 'SELECT * FROM tb_filmes';

        return $this->conexaoBanco->query($script)->fetchAll();

            if(!empty($limite)){
                $auxScript = " ORDER BY RAND() LIMIT {$limite}";
            }

            return $banco->query($script)->fetchAll();

        }      
}
