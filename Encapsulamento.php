<?php

/*
Encapsulamento

Protege os dados usando modificadores de acesso:
    - public: acessível de qualquer lugar.
    - protected: acessível apenas pela classe e suas subclasses.
    - private: acessível apenas pela própria classe.
*/

class contaBancaria  {
    private $saldo; // |Atributo privado.

    public function __construct($saldoInicial) {
        $this->saldo = $saldoInicial; // |Atribui o valor inicial ao saldo.
    }

    public function depositar($valor) {
        $this->saldo += $valor; // |Adiciona o valor ao saldo.
    }

    public function consultarSaldo() {
        return $this->saldo; // |Retorna o saldo atual.
    }
}

$conta = new contaBancaria(1000); // |Cria uma nova conta com saldo inicial de 1000.
$conta->depositar(500); // |Deposita 500 na conta.  
echo "Saldo atual: " . $conta->consultarSaldo(); // |Exibe o saldo atual da conta.