<?php
abstract class formaGeometrica {
    public $nome;
    public $formato;

    public function __construct($nome, $formato) {
        $this->nome = $nome;
        $this->formato = $formato;
    }
}

//Formas Geometricas (Quadrado, Triângulo e Retangulo)
class Quadrado extends formaGeometrica {
    public function __construct($nome, $formato) {
        parent::__construct($nome, $formato);
        echo "Quadrado criado com sucesso!<br>";
    }

    public function area($lado) {
        $area = $lado * $lado;
        echo "A área do quadrado é: $area <br>";
    }
}
class Triangulo extends formaGeometrica {
    public function __construct($nome, $formato) {
        parent::__construct($nome, $formato);
        echo "Triângulo criado com sucesso!<br>";
    }

    public function area($base, $altura) {
        $area = ($base * $altura) / 2;
        echo "A área do triângulo é: $area <br>";
    }
}
class Retangulo extends formaGeometrica {
    public function __construct($nome, $formato) {
        parent::__construct($nome, $formato);
        echo "Retângulo criado com sucesso!<br>";
    }

    public function area($base, $altura) {
        $area = $base * $altura;
        echo "A área do retângulo é: $area <br>";
    }
}

?>