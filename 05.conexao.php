<?php

class Conexao {
    private $conexao;

    public function __construct() {
        

        //Conexão com o banco de dados
        $this->conexao = 'conectado com o banco de dados';
        echo 'Conexão estabelecida com sucesso!<br>';
    }

    public function query() {
        // Simula a execução de uma query
        echo "Executando a query: Consulta realizada com sucesso! <br>";
    }

    public function __destruct() {
        $this->conexao = null;
        echo "Conexão encerrada com sucesso!<br>";
    }
}


$conexao = new Conexao();
$conexao->query();      

