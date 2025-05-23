<?php
class VagonCarga extends Vagon {
    private $peso_maximo_a_transportar;
    private $peso_carga_actual;
    private $indiceCarga;

    public function __construct($anioInstalacion, $largo, $ancho, $pesoVacio, $pesoMaximo, $pesoActual, $indi) {
        parent :: __construct($anioInstalacion, $largo, $ancho, $pesoVacio);
        $this->peso_maximo_a_transportar = $pesoMaximo;
        $this->peso_carga_actual = $pesoActual;
        $this->indiceCarga = 0.2;
    }

    public function getPeso_maximo_a_transportar() {
        return $this->peso_maximo_a_transportar;
    }

    public function getPeso_carga_actual() {
        return $this->peso_carga_actual;
    }

    public function getIndiceCarga() {
        return $this->indiceCarga;
    }

    public function setPeso_maximo_a_transportar($peso_maximo) {
        $this->peso_maximo_a_transportar = $peso_maximo;
    }

    public function setPeso_carga_actual($peso_actual)  {
        $this->peso_carga_actual = $peso_actual;
    }

    public function setIndiceCarga($ind) {
        $this->indiceCarga = $ind;
    }
    
    public function calcularPesoVagon() {
        $vagon_vacio = parent :: getPeso_del_vagon_vacio();
        $peso_carga = $this->getPeso_carga_actual();
        $indice_de_carga = $this->getIndiceCarga();

        $peso_actual = $vagon_vacio + ($peso_carga + ($indice_de_carga * $peso_carga));

        return $peso_actual;
    }

    public function incorporarCargaVagon($cant_carga) {
        $valor = false;
        $peso_maximo = $this->getPeso_maximo_a_transportar();
        $peso_carga_actual = $this->getPeso_carga_actual();
        if ($cant_carga <= $peso_maximo) {
            if(($cant_carga + $peso_carga_actual) <= $peso_maximo) {
            $this->setPeso_carga_actual($cant_carga + $peso_carga_actual);
            $peso_actual = calcularPesoVagon();
            parent :: setPeso_actual($peso_actual);
            $valor = true;
            }
        }
        return $valor;
    }

    public function _toString() {
        $cadena = ("\n-----------VAGON DE CARGA-----------" . 
                    "\nPeso maximo que puede transportar: " . $this->getPeso_maximo_a_transportar() . 
                    "\nPeso de la carga actual: " . $this->getPeso_carga_actual() . 
                    "\nIndice de carga: " . $this->getIndiceCarga() . 
                    "\nPeso actual del vagon: " . $this->calcularPesoVagon());
        return $cadena;                
    }

}
?>