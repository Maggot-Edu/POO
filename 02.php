<?php 
declare(strict_types = 1);
include 'includes/header.php';

// Encapsulación
class Producto{
    // Public - Se puede acceder y modificar en cualquier lugar (clase o objeto)
    // Protected - Se puede acceder y modificar unicamente en la clase
    // Private - Solo miembros de la misma pueden acceder a el

    /**** PHP 8 ****/
    public function __construct(protected string $nombre,public int $precio,public bool $disponible)
    {
    }
    /*Metodo*/
    public function mostrarProducto() : void {
        echo "El producto es: " . $this->nombre . " y su precio es de: ". $this->precio;
    }

    public function getNombre() :string {
        return $this->nombre;
    }

    public function setNombre( string $nombre ){
        $this->nombre = $nombre;
    }
}

$producto = new Producto('Tablet', 321, true);
//$producto->mostrarProducto();
$producto->setNombre("Ratón");
echo $producto->getNombre();



echo "<pre>";
var_dump($producto);
echo "</pre>";
echo "<br>";
$producto2 = new Producto('Monitor', 400, false);

//$producto2->mostrarProducto();
echo $producto2->getNombre();
// echo "<pre>";
// var_dump($producto2);
// echo "</pre>";

include 'includes/footer.php';

?>