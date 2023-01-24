<?php include 'includes/header.php';
// Icluir otras clases

require 'vendor/autoload.php';

use App\Clientes;
use App\Detalles;


$cliente = new Clientes();
echo "<br>";
$detalle = new Detalles();
echo "<br>";

include 'includes/footer.php';