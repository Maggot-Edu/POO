<?php include 'includes/header.php';

// Conectar BBDD
$db = new PDO('mysql:host=localhost; dbname=bienes_crud', 'root', '');
// Consulta 
$query = "SELECT titulo, precio from propiedades";
// Preparar consulta
$stmt = $db->prepare($query);
// Ejecutamos consulta
$stmt->execute();
// Obtrenemos resultado
$resultado = $stmt->fetchAll( PDO::FETCH_ASSOC );
// Iterar resultado
foreach($resultado as $propiedad):
    echo $propiedad['titulo']. " Precio: ". $propiedad['precio'] ."<br>";
endforeach;
// echo "<pre>";
// var_dump($resultado);
// echo "</pre>";
include 'includes/footer.php';