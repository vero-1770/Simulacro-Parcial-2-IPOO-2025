<?php
class Vagon {
    private $anio_instalacion_vagon;
    private $largo_vagon;
    private $ancho_vagon;
    private $peso_del_vagon_vacio;

    public function __construct($anioInstalacion, $largo, $ancho, $pesoVacio) {
     $this->anio_instalacion_vagon = $anioInstalacion;
     $this->largo_vagon = $largo;
     $this->ancho_vagon = $ancho;
     $this->peso_del_vagon_vacio = $pesoVacio; 
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

    

}
?>
