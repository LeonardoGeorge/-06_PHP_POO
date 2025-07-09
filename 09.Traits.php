<?php
trait Logger {
    public function log($messsage) {
        echo "Log: " . $messsage . "<br>";
        echo "Data: " . date('Y-m-d H:i:s') . "<br>";
    }
}

class user {
    use Logger;

    public function createUser() {
        echo 'Usuário criado com sucesso!<br>';
        $this->log('Usuário criado');
    }
    public function usuarioLogado() {
        echo 'Usuário logado com sucesso!<br>';
        $this->log('Usuário logado');
    }
}



?>