<?php
// 1. Criar uma instacia de pagamentos
// 2. O usuario escolhe o metodo de pagamento
// 3. O sistema vai CHAMAR o metodo PAGAR daquele método escolhido.
interface Pagamento {
    public function pagar($valor);
}

class CartaoCredito implements Pagamento {
    public function pagar($valor) {
        return true;
        echo "Pagamento realizado com Cartão de Crédito!<br>";
    }
}
class Boleto implements Pagamento {
    public function pagar($valor) {
        return true;
        echo "Pagamento realizado com Boleto!<br>";
    }
}
class Pix implements Pagamento {
    public function pagar($valor) {
        return false; // Simulando falha no pagamento
        echo "Pagamento realizado com Pix!<br>";
    }
}

echo "Escolha o método de pagamento:<br>";
echo "1. Cartão de Crédito<br>"; 
echo "2. Boleto<br>";
echo "3. Pix<br>";
// Simulando a escolha do usuário
$escolha = 2; // Suponha que o usuário escolheu Pix.
$valor = 100.00; // Valor do pagamento  
switch ($escolha) {
    case 1:
        $pagamento = new CartaoCredito();
        break;
    case 2:
        $pagamento = new Boleto();
        break;
    case 3:
        $pagamento = new Pix();
        break;
    default:
        echo "Método de pagamento inválido!<br>";
        exit;
}
// Realizando o pagamento
$pagamento->pagar($valor);
// Verificando se o pagamento foi realizado com sucesso
if($pagamento->pagar($valor)) {
    echo "Pagamento de R$ $valor realizado com sucesso!<br>";
} else {
    echo "Falha no pagamento de R$ $valor!<br>";
}
// Fim do código de pagamento
echo "Fim do processo de pagamento!<br>";
    






?>