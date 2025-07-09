<?php
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

?>