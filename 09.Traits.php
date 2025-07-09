<?php
function meu_autoload($className) {
    include_once('classes/' . $className . '.class.php'); 
}

meu_autoload('user');
meu_autoload('file');


trait Logger {
    public function log($messsage) {
        echo "Log: " . $messsage . "<br>";
        echo "Data: " . date('Y-m-d H:i:s') . "<br>";
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