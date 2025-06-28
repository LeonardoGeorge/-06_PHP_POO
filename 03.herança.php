<?php 
class Veiculo {
    public string $marca;

    public function __construct(string $marca) {
        $this->marca = $marca; // Atribui a marca do veículo
    }

    public function fazerBuzinar() {
        echo "Buzinando: Beep! Beep!<br>";
    }

}

class Carro extends Veiculo {
    public $modelo; // Atributo específico da classe Carro

    public function __contruct(string $marca, string $modelo) {
        // Construtor da classe Carro que chama o construtor da classe pai Veiculo
        parent::__construct($marca); // Chama o construtor da classe pai
        $this->modelo =$modelo; // Atribui o modelo do carro
    }    
}

$carro = new Veiculo("Toyota", "Corolla"); // Cria um objeto da classe Carro
$carro->fazerBuzinar(); // Chama o método da classe pai Veiculo


?>