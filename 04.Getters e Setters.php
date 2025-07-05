<?php

Class Produto {
    private $nome;
    private $preco;
    
    public function __construct(string $nome, float $preco) {
        $this->$nome = $nome;
        $this->preco = $preco;
    }

    public function getNome(): string {
        return $this->nome;
    }
    public function getPreco(): float {
        return $this->preco;
    }
}


$produto1 = new Produto("Tablet Samsung", 250.00);

echo "Nome do produto: " . $produto->getNome() . "<br>";
echo "Preço do produto: R$" . $produto->getPreco();

?>