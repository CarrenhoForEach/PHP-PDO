<?php 


session_start();

define('HOST', '127.0.0.1');
define('DB', 'login');
define('USER', 'root');
define('PASS', 'senha');

try{
    $pdo = new PDO('mysql:host='.HOST.';dbname='.DB,USER, PASS, [PDO::MYSQL_ATTR_INIT_COMMAND =>  "SET NAMES 'UTF8'"]);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(Exception $e){
    echo 'Erro ao conectar ao banco de dados';
    echo $e;
}

?>