<?php
class Carro{
    public $marca; // Propriedade pública
    public $modelo; // Propriedade pública

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

?>