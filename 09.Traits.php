<?php
function meu_autoload($className) {
    $directory = ['classes/', 'traits/'];

    foreach ($directory as $dir) {
        $directory = strtolower($dir);
        if (file_exists($dir . strtolower($className) . '.class.php')) {
            include_once($dir . strtolower($className) . '.class.php');
            break;
        }
    }
}

spl_autoload_register('meu_autoload');


$user = new user();
$user->createUser();
$user->usuarioLogado();

echo "<hr>";

$file = new File();
$file->createFile();
$file->deleteFile();



?>