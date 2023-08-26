<?php

$host = 'localhost';
$username = 'senac';
$password = 'senac';
$database = 'AulaWeb';
// cria uma conexão com o banco de dados a partir dos dados de conexão
$pdo = new PDO("mysql:host=$host;dbname=$database", $username, $password);
/*
// realizo um select básico para testar a conexão
$sql = "SELECT * FROM Noticias";
// executa o SQL dentro do banco baseado nas configurações de conexão
$resultado = $pdo->query($sql);

if($resultado){
    echo "Conexão realizada com sucesso!";
}
*/
