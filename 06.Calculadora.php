<?php

class Calculadora {

    public const PI = 3.14;
    public const VERSAO = "1.0.0";

    // Método estático 
    public static function areaCirculo(float $raio) {
        return self::PI * $raio * $raio;
    }


    // This - se refere à instância atual da classe.
    // Self - Se refere à própria classe.
}

$area = Calculadora::areaCirculo(10);
echo "A área do círculo com raio 10 é: " . $area . "<br>";
echo "Versão da Calculadora: " . Calculadora::VERSAO . "<br>";