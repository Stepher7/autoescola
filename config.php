<?php

    $host = "localhost";
    $dbname = "autoescola";
    $user = "root";
    $password = "";
try {

$con = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", 
$user, $password);
$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {

echo "Erro na conexão: " . $e->getMessage();

}

?>