<?php
class VagonPasajeros extends Vagon {
    private $cant_max_pasajeros;
    private $cant_pasajeros_actual;
    private $peso_promedio_pasajeros;

    public function __construct ($anioInstalacion, $largo, $ancho, $pesoVacio, $maxPasajeros, $cantPasajeros) {
        parent :: __construct ($anioInstalacion, $largo, $ancho, $pesoVacio);
        $this->cant_max_pasajeros = $maxPasajeros;
        $this->cant_pasajeros_actual = $cantPasajeros;
        $this->peso_promedio_pasajeros = 50;
    }

    public function getCant_max_pasajeros() {
        return $this->cant_max_pasajeros;
    }

    public function getCant_pasajeros_actual() {
        return $this->cant_pasajeros_actual;
    }

    public function getPeso_promedio_pasajeros() {
        return $this->peso_promedio_pasajeros;
    }

    public function setCant_max_pasajeros($maxCantPasajeros) {
        $this->Cant_max_pasajeros = $maxCantPasajeros;
    }

    public function setCant_pasajeros_actual($cantPasajerosActual) {
        $this->cant_pasajeros_actual = $cantPasajerosActual;
    }

    public function setPeso_promedio_pasajeros($pesoPromedioPasajeros) {
        $this->peso_promedio_pasajeros = $pesoPromedioPasajeros;
    }

    public function calcularPesoVagon() {
        $cant_pasajeros = $this->getCant_pasajeros_actual();
        $peso_promedio_pasajeros = $this->getPeso_promedio_pasajeros();
        $peso_vacio = parent :: getPeso_del_vagon_vacio();

        $pesoActual = ($cant_pasajeros * $peso_promedio_pasajeros) + $peso_vacio;

        return $pesoActual;
    }

    public function incorporarPasajeroVagon($cant_pasajeros) {
        $valor = false;
        $maximo_de_pasajeros = $this->getCant_max_pasajeros();
        $cant_pasajeros_actual = $this->getCant_pasajeros_actual();
        if ($cant_pasajeros <= $maximo_de_pasajeros) {
            if(($cant_pasajeros_actual + $cant_pasajeros) <= $cant_max_pasajeros) {
            $this->setCant_pasajeros_actual($cant_pasajeros_actual + $cant_pasajeros);
            $nuevo_peso_actual = $this->calcularPesoVagon();
            parent :: setPeso_actual($nuevo_peso_actual);
            $valor = true;
            }
        }
        return $valor;
    }

    public function __toString() {
        $cadena = ("\n" . parent :: __toString() . "\n" .
                    "\n-----------VAGON DE PASAJEROS-----------" .
                    "\nCantidad maxima de pasajeros soportada: " . $this->getCant_max_pasajeros() .
                    "\nCantidad de pasajeros actual: " . $this->getCant_pasajeros_actual() .
                    "\nPeso promedio pasajeros: " . $this->getPeso_promedio_pasajeros() .
                    "\nPeso actual del vagon: " . $this->calcularPesoVagon());
        return $cadena;
    }
}
?>