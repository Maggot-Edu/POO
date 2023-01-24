<?php

use Automovil as GlobalAutomovil;
use Transporte as GlobalTransporte;
use TransporteInterfaz as GlobalTransporteInterfaz;

 include 'includes/header.php';

/* INTERFACE */

interface TransporteInterfaz {

    public function getInfo() : string;
    public function getRuedas() : int;

}

class Transporte implements TransporteInterfaz {
    public function __construct( protected int $ruedas, protected int $capacidad )
    {
        
    }

    public function getInfo() : string {
        return "El transporte tiene ". $this->ruedas . " y una capacidad de ". $this->capacidad . " personas ";
    }

    public function getRuedas() : int {
        return $this->ruedas;
    }
}

class Automovil extends Transporte implements GlobalTransporteInterfaz {
    public function __construct( protected int $ruedas, protected int $capacidad, protected string $color )
    {
        
    }
    public function getInfo() : string {
        return "El transporte tiene ". $this->ruedas . " y una capacidad de ". $this->capacidad . " personas y es de color " . $this->color;
    }
    public function getColor() : string {
        return "El color es ". $this->color;
    }
}

echo "<pre>";
var_dump($bici = new Transporte(2, 1));
echo $bici->getInfo();
echo "<hr>";
var_dump($auto = new Automovil(4, 5, 'Rojo'));
echo $auto->getColor();
echo "</pre>";



include 'includes/footer.php';