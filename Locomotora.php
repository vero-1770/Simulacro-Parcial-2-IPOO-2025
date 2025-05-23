<?php
class Locomotora {
    private $peso_locomotora;
    private $velocidad_maxima;

    public function __construct($peso, $velocidadMax) {
        $this->peso_locomotora = $peso;
        $this->velocidad_maxima = $velocidad_maxima;
    }
    
    public function getPeso_locomotora() {
        return $this->peso_locomotora;
    }
 
    public function getVelocidad_maxima() {
        return $this->velocidad_maxima;
    }

    public function setPeso_locomotora($peso) {
        $this->peso_locomotora = $peso;
    }

    public function setVelocidad_maxima($velocidad) {
        $this->velocidad_maxima = $velocidad;
    }

    public function __toString() {
        $cadena = ("\n-----------LOCOMOTORA-----------" . 
                    "\nPeso: " . $this->getPeso_locomotora() . 
                    "\nVelocidad: " . $this->getVelocidad_maxima());
        return $cadena;
    }
}
?>