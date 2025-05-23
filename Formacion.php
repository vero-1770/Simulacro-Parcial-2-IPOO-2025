<?php
include_once 'Vagon.php';
include_once 'VagonCarga.php';
include_once 'VagonPasajeros.php';
include_once 'Locomotora.php';
class Formacion {
    private $ref_objLocomotora;
    private $coleccion_vagones;
    private $maximo_vagones;

    public function __construct($refLocomotora, $maxVagones) {
        $this->ref_objLocomotora = $refLocomotora;
        $this->coleccion_vagones = [];
        $this->maximo_vagones = $maxVagones;
    }

    public function getRef_objLocomotora() {
        return $this->ref_objLocomotora;
    }

    public function getColeccion_vagones() {
        return $this->coleccion_vagones;
    }

    public function getMaximo_vagones() {
        return $this->maximo_vagones;
    }

    public function setRef_objLocomotora($objLocomotora) {
        $this->ref_objLocomotora = $objLocomotora;
    }

    public function setColeccion_vagones($colecVagones) {
        $this->coleccion_vagones = $colecVagones;
    }

    public function setMaximo_vagones($maxVagones) {
        $this->maximo_vagones = $maxVagones;
    }

    public function incorporarPasajeroFormacion($cant_pasajeros) {
        $valor = false;
        $vagones = $this->getColeccion_vagones();
        $cant_vagones = count($vagones);
        $i = 0;

        while ($valor != true && $i<$cant_vagones) {
            $unVagon = $vagones[$i];
            if(is_a($unVagon, 'VagonPasajeros')) {
                $valor = $unVagon->incorporarPasajeroVagon($cant_pasajeros);
            }
            $i++;
        }
        return $valor;        
    }

    public function incorporarVagonFormacion($objVagon) {
       $valor = false;
       $maximo_vagones = $this->getMaximo_vagones();
       $vagones = $this->getColeccion_vagones();
       $cant_vagones_actual = count($vagones);

       if ($cant_vagones_actual  < $maximo_vagones) {
            array_push($vagones, $objVagon);
            $this->setColeccion_vagones($vagones);
            $valor = true;
       }
       return $valor;
    }

    public function promedioPasajeroFormacion() {
        $vagones = $this->getColeccion_vagones();
        $vagones_pasajeros = [];
        $promedio = 0;
        $total_pasajeros = 0;

        foreach ($vagones as $vagon) {
            if (is_a ($vagon, 'VagonPasajeros')) {
                array_push($vagones_pasajeros, $vagon);
            }
        }

        foreach ($vagones_pasajeros as $unVagon) {
            $pasajeros = $unVagon->getCant_pasajeros_actual();
            $total_pasajeros += $pasajeros;
        }

        $cant_vagones = count($vagones_pasajeros);

        if ($cant_vagones > 0) {
            $promedio = $total_pasajeros / $cant_vagones;
        }
        return $promedio;
    }

    public function pesoFormacion() {
        $locomotora = $this->getRef_objLocomotora();
        $peso_locomotora = $locomotora->getPeso_locomotora();
        $vagones = $this->getColeccion_vagones();
        $peso_total = $peso_locomotora;

        foreach ($vagones as $vagon) {
            $peso_vagon = $vagon->calcularPesoVagon(); 
            $peso_total += $peso_vagon;
        }
        return $peso_total;
    }

    public function retornarVagonSinCompletar() {
        $vagones = $this->getColeccion_vagones();
        $encontrado = false;
        $vagon_sin_completar = null;

        $i = 0;
        $cant_vagones = count($vagones);

        while (!$encontrado && $i < $cant_pasajeros) {
            $vagon = $vagones[$i];

            if (is_a($vagon, 'VagonPasajero')) {
                $cant_maxima = $vagon->getCant_max_pasajeros();
                $cant_actual = $vagon->getCant_pasajeros_actual();
                $cant = $cant_maxima - $cant_actual;
                if($cant != 0) {
                    $vagon_sin_completar = $vagon;
                    $encontrado = true;
                }
            }

            if(is_a($vagon, 'VagonCarga')) {
                $cant_maxima = $vagon->getPeso_maximo_a_transportar();
                $cant_actual = $vagon->getPeso_carga_actual();
                $cant = $cant_maxima - $cant_actual;
                if($cant != 0) {
                    $vagon_sin_completar = $vagon;
                    $encontrado = true;
                }
            }

            $i++;
        }
        return $vagon_sin_completar;
    }

    public function __toString() {
        $coleccopn = $this->getColeccion_vagones();
        $vagones = "";

        foreach ($vagones as $vagon) {
            $vagones .= $vagon;
        }

        $cadena = ("\n-----------FORMACION-----------" . 
                    "\n" . $this->getRef_objLocomotora() . 
                    "\n-----------VAGONES-----------" .
                    "\n" . $vagones . 
                    "\nMaximo de vagones posibles: " . $this->getMaximo_vagones());
        return $cadena;
    }
}
?>