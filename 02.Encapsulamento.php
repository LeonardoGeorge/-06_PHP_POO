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


    public function sacar($valor)   {
      if ($valor > 1000) {
            echo "Saque de R$" . $valor . " não permitido. Valor máximo de saque é R$1000.<br>";
            return; // |Retorna se o valor do saque for maior que 1000.
      }
        if ($valor > $this->saldo) {
            echo "Saldo insuficiente para saque de R$" . $valor . ".<br>";
            return; // |Retorna se o valor do saque for maior que o saldo.
        }
        $this->saldo -= $valor; // |Subtrai o valor do saldo.
        echo "Saque de R$" . $valor . " realizado com sucesso.<br>";  

    }

    

    public function depositar($valor) {
        $this->saldo += $valor; // |Adiciona o valor ao saldo.  
        echo "Depósito de R$" . $valor . " realizado com sucesso.<br>";
    }

    public function consultarSaldo() {
        return $this->saldo; // |Retorna o saldo atual.
        echo "Saldo atual: R$" . $this->saldo . "<br>";
    }
}

$conta = new contaBancaria(1000); // |Cria uma nova conta com saldo inicial de 1000.
$conta->depositar(500);  
$conta->depositar(100); 
$conta->sacar(200); 
$conta->sacar(500);
$conta->sacar(900); 
$conta->sacar(50); 
$conta-> depositar(150000);
echo "Saldo atual: " . $conta->consultarSaldo(); // |Exibe o saldo atual da conta.