<?php 
declare(strict_types = 1);

use Producto as GlobalProducto;

include 'includes/header.php';

// Metodos Estaticos
class Producto{
    /**** PHP 8 ****/
    public $imagen;
    public static $imagenPlaceholder = "imagen.jpg";

    public function __construct(protected string $nombre,public int $precio,public bool $disponible, string $imagen)
    {
        if ($imagen) {
            self::$imagenPlaceholder = $imagen;
        }
    }

    public static function obtenerImagenProducto() {
        return self::$imagenPlaceholder;
    }

    public static function obtenerProducto() {
        echo "Obteniendo datos del producto...";
    }

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

echo "<br>";
$producto = new Producto('Tablet', 321, true, '');
//$producto->mostrarProducto();
echo $producto->obtenerImagenProducto();
$producto->setNombre("Ratón");
echo $producto->getNombre();



echo "<pre>";
var_dump($producto);
echo "</pre>";
echo "<br>";
$producto2 = new Producto('Monitor', 400, false, 'Monitor.jpg');
echo $producto2->obtenerImagenProducto();
//$producto2->mostrarProducto();
echo $producto2->getNombre();
// echo "<pre>";
// var_dump($producto2);
// echo "</pre>";

include 'includes/footer.php';

?>