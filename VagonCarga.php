<?php
class VagonCarga extends Vagon {
    private $peso_maximo_a_transportar;
    private $peso_carga_actual;
    private $indice;

    public function __construct($anioInstalacion, $largo, $ancho, $pesoVacio, $pesoMaximo, $pesoActual, $indi) {
        parent :: __construct($anioInstalacion, $largo, $ancho, $pesoVacio);
        $this->peso_maximo_a_transportar = $pesoMaximo;
        $this->peso_carga_actual = $pesoActual;
        $this->indice = $indi;
    }

    public function getPeso_maximo_a_transportar() {
        return $this->peso_maximo_a_transportar;
    }

    public function getPeso_carga_actual() {
        return $this->peso_carga_actual;
    }

    public function getIndice() {
        return $this->indice;
    }

    public function setPeso_maximo_a_transportar($peso_maximo) {
        $this->peso_maximo_a_transportar = $peso_maximo;
    }

    public function setPeso_carga_actual($peso_actual)  {
        $this->peso_carga_actual = $peso_actual;
    }

    public function setIndice($ind) {
        $this->indice = $ind;
    }

}
?>