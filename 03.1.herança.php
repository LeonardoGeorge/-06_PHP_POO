<?php

abstract class Animal {
    public $respira;
    public $mover;
    public $numeroPatas;
    
    public function __construct($respira, $mover, int $numeroPatas) {
        $this->respira = $respira;
        $this->mover = $mover;
        $this->numeroPatas = $numeroPatas;
    }
}

class Mamifero extends Animal {
    public function __construct($respira, $mover, int $numeroPatas) {
        parent::__construct($respira, $mover, $numeroPatas);
        echo "Mamífero criado com sucesso!<br>";
    }
    
    public function tipoDeMamifero($tipo) {
        echo "Este mamífero é um: $tipo <br>";
    }
    public function mamifero() {
        echo "O mamífero respira: " . $this->respira . "<br>";
        echo "O mamífero se move: " . $this->mover . "<br>";
    }
    public function amamentar() {
        echo "O mamífero está amamentando!<br>";
    }
    public function emitirSom(string $som) {
        echo "O mamífero está emitindo um som: . $som <br>";
    }
}


class Passaro extends Animal {
    public function __construct($respira = "Ar", $mover = "Voando", int $numeroPatas = 2) {
        parent::__construct($respira, $mover, $numeroPatas);
        echo "Pássaro criado com sucesso!<br>";
    }
    
    public function ave($ave) {
        echo "O pássaro respira: " . $this->respira . "<br>";
        echo "O pássaro se move: " . $this->mover . "<br>";
        echo "O passsaro é uma ave: $ave <br>";
    }
    
    public function cantar($cantar) {
        echo "O pássaro está cantando: $cantar<br>";
    }
    
    public function numeroPatas() {
        echo "Número de patas do pássaro: " . $this->numeroPatas . "<br>";
    }
}


$cachorro = new Mamifero("Ar", "Andando", 4);
$cachorro->tipoDeMamifero('Cachorro');
$cachorro->emitirSom('Au Au');

echo "<hr>";

$gato = new Mamifero("Ar", "Andando", 4);
$gato->tipoDeMamifero('Gato');  
$gato->emitirSom('Miau');


echo "<hr>";
$papagaio = new Passaro();
$papagaio->ave('Papagaio');   
$papagaio->cantar('Falou! Falou!');


?>