<?php
// 1. Criar uma instacia de pagamentos
// 2. O usuario escolhe o metodo de pagamento
// 3. O sistema vai CHAMAR o metodo PAGAR daquele método escolhido.
include '08.1.functions.php';


interface Pagamento {
    public function getName(): string;
    public function pagar($valor);
}

class CartaoCredito implements Pagamento {

    public function getName(): string
    {
        return 'Cartão de Crédito';
    }
    public function pagar($valor) {
        return true;
        echo "Pagamento realizado com Cartão de Crédito!<br>";
    }
}
class Boleto implements Pagamento {
    public function getName(): string
    {
        return 'Boleto';
    }
    public function pagar($valor) {
        return true;
        echo "Pagamento realizado com Boleto!<br>";
    }
}
class Pix implements Pagamento {

    public function getName(): string {
        return 'Pix';
    }
    public function pagar($valor) {
        return false; // Simulando falha no pagamento
        echo "Pagamento realizado com Pix!<br>";
    }
}

processPayment(new boleto(), 100.00);
echo "<br>";
echo "<hr>";
processPayment(new CartaoCredito(), 200.00);
echo "<br>";
echo "<hr>";
processPayment(new Pix(), 300.00);

?>