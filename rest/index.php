<?php
// jason
header('Content-Type: application/json');

include __DIR__ . './../config/connection.php';

$consulta = $pdo->query("SELECT * FROM Noticias");

//$noticias = $consulta->fetchAll(PDO::FETCH_ASSOC);

$json = [];
//while($noticia = array_shift($noticias)) {
//    echo "<h1>{$noticia['titulo']}</h1>";
//    echo "<p>{$noticia['conteudo']}</p>";
//    echo "<hr>";
//}
while ($noticia = $consulta->fetch(PDO::FETCH_ASSOC)) {
    $json[] = $noticia;
}

echo json_encode($json);
?>