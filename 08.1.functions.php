<?php
function processPayment(Pagamento $formaDePagamento, float $valorPagamento) {
   echo 'Procesando pagamento via ' . $formaDePagamento->getName() . ' com valor de R$ ' . $valorPagamento . '<br>';
   if($formaDePagamento->pagar($valorPagamento)) {
        echo "Pagamento realizado com sucesso!<br>"; 
   } else {
        echo "Falha no pagamento!<br>";
   }
}


?>