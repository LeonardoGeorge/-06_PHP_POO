<?php
class Carro {
    public string $marca; // Propriedade pública
    public string $modelo; // Propriedade pública
    public int $ano; // Propriedade pública (opcional)
    public string $cor; // Propriedade pública (opcional)

    public function __construct($marca, $modelo){
        $this->marca = $marca; // Atribui o valor da marca
        $this->modelo = $modelo; // Atribui o valor do modelo
    }

    public function acelerar(){
        echo "O $this->marca $this->modelo está acelerando.<br>";
    }

}

// Criação de objeto
$meuCarro = new Carro("Ford", "Mustang");
$meuCarro->acelerar(); // Chama o método acelerar do objeto
$seuCarro = new Carro("Chevrolet", "Camaro");
$seuCarro-> cor = "Amarelo"; // Adiciona uma nova propriedade dinamicamente

?>