<?php include 'includes/header.php';
// Icluir otras clases

// require 'clases/Clientes.php';
// require 'clases/Detalles.php';

use App\Clientes;
use App\Detalles;

function mi_autoload($clase) {
    $partes = explode('\\', $clase);
    require __DIR__ . '/clases/' . $partes[1] . '.php';
}

spl_autoload_register('mi_autoload');


$cliente = new Clientes();
echo "<br>";
$detalle = new Detalles();
echo "<br>";

include 'includes/footer.php';