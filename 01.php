<?php 
declare(strict_types = 1);
include 'includes/header.php';

// Definir una clase
class Producto{
    /**** PHP 7 o anterior ****/
    // public $nombre;
    // public $precio;
    // public $disponible;

    // public function __construct(string $nombre,int $precio,bool $disponible)
    // {
    //     $this->nombre = $nombre;
    //     $this->precio = $precio;
    //     $this->disponible = $disponible;
    // }
    /**** PHP 8 ****/
    public function __construct(public string $nombre,public int $precio,public bool $disponible)
    {

    }
    /*Metodo*/
    public function mostrarProducto(  ){
        echo "El producto es: " . $this->nombre . " y su precio es de: ". $this->precio;
    }
}

$producto = new Producto('Tablet', 321, true);

$producto->mostrarProducto();

echo "<pre>";
var_dump($producto);
echo "</pre>";

$producto2 = new Producto('Monitor', 400, false);

$producto2->mostrarProducto();

echo "<pre>";
var_dump($producto2);
echo "</pre>";

include 'includes/footer.php';

?>