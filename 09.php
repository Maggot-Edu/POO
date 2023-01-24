<?php include 'includes/header.php';

// conectar bbdd a nysqli

$db = new mysqli('localhost', 'root', '', 'bienes_crud');
// creamos coansulta
$query = "SELECT titulo, precio from propiedades";
// preparamos
$stmt = $db->prepare($query);
// ejecutamos
$stmt->execute();
// creamos variable
$stmt->bind_result($titulo, $precio);
// asignamos el resultado
//$stmt->fetch();
// imprimimos

while ($stmt->fetch()):
    var_dump($titulo);
    var_dump($precio);
endwhile;

include 'includes/footer.php';