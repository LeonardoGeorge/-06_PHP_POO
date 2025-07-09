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
class File {
    use Logger;
    
    public function createFile() {
        echo 'Arquivo criado <br>';
        $this->log('Arquivo criado');
    }

    public function deleteFile() {
        echo 'Arquivo deletado <br>';
        $this->log('Arquivo deletado');
    }
}

$user = new user();
$user->createUser();
$user->usuarioLogado();

echo "<hr>";

$file = new File();
$file->createFile();
$file->deleteFile();



?>