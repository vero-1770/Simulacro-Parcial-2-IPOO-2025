<?php
class Formacion {
    private $ref_objLocomotora;
    private $coleccion_vagones;
    private $maximo_vagones;

    public function __construct($refLocomotora, $colecVagones, $maxVagones) {
        $this->ref_objLocomotora = $refLocomotora;
        $this->coleccion_vagones = $colecVagones;
        $this->maximo_vagones = $maxVagones;
    }
    
}
?>