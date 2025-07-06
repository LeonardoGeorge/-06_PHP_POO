<?php

Class Produto {
    private $nome;
    private $preco;
    
    public function __construct(string $nome, float $preco) {
        $this->nome = $nome;
        $this->preco = $preco;
    }

    // Getters
    public function getNome(): string {
        return $this->nome;
    }
    public function getPreco(): float {
        return $this->preco;
    }

   // Setters 
    public function setPreco(float $preco) {
        $this->preco = $preco;
    }
}


$produto1 = new Produto("Tablet Samsung", 250.00);

echo "Nome do produto: " . $produto1->getNome() . "<br>";
echo "Preço do produto: R$" . $produto1->getPreco();

?>