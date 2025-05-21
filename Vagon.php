<?php
class Vagon {
    private $anio_instalacion_vagon;
    private $largo_vagon;
    private $ancho_vagon;
    private $peso_del_vagon_vacio;
    private $peso_actual;

    public function __construct($anioInstalacion, $largo, $ancho, $pesoVacio) {
     $this->anio_instalacion_vagon = $anioInstalacion;
     $this->largo_vagon = $largo;
     $this->ancho_vagon = $ancho;
     $this->peso_del_vagon_vacio = $pesoVacio; 
     $this->peso_actual = $pesoVacio;
    }

    public function getAnio_instalacion_vagon() {
        return $this->anio_instalacion_vagon;
    }

    public function getLargo_vagon() {
        return $this->largo_vagon;
    }

    public function getAncho_vagon() {
        return $this->ancho_vagon;
    }

    public function getPeso_del_vagon_vacio() {
        return $this->peso_del_vagon_vacio;
    }

    public function getPeso_actual() {
        return $this->peso_actual;
    }

    public function setAnio_instalacion_vagon($anioInstalacionVagon) {
        $this->anio_instalacion_vagon = $anioInstalacionVagon;
    }

    public function setLargo_vagon($largoVagon) {
        $this->largo_vagon = $largoVagon;
    }

    public function setAncho_vagon($anchoVagon) {
        $this->ancho_vagon = $ancho_vagon;
    }

    public function setPeso_del_vagon_vacio($pesoVagonVacio) {
        $this->peso_del_vagon_vacio = $pesoVagonVacio;
    } 
    
    public function setPeso_actual($peso) {
        $this->peso_actual = $peso;
    }

    public function __toString() {
        $cadena = ("\n-----------DATOS DEL VAGON-----------" .
                    "\nAño de instalación: " . $this->getAnio_instalacion_vagon() .
                    "\nLargo: " . $this->getLargo_vagon() . 
                    "\nAncho: " . $this->getAncho_vagon() . 
                    "\nPeso del vagon vacio: " . $this->getPeso_del_vagon_vacio() .
                    "\nPeso actual: " . $this->getPeso_actual());
        return $cadena;
    }

    public function calcularPesoVagon() {
        $pesoActual = $this->getPeso_del_vagon_vacio();
        $this->setPeso_actual($peso_actual);
        return $peso_actual;
    }
   
}
?>
