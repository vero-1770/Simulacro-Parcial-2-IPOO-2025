<?php
include_once 'Vagon.php';
include_once 'VagonPasajeros.php';
include_once 'VagonCarga.php';
include_once 'Locomotora.php';
include_once 'Formacion.php';

$locomotora = new Locomotora(188000, 140);

$vagon1 = new VagonPasajeros(2000, 10, 10, 1500, 30, 25);
$vagonCarga = new VagonCarga(2000, 10, 10, 1500, 60000, 55000);
$vagon = new VagonPasajeros(2000, 10, 10, 1500, 50, 50);

$formacion = new Formacion($locomotora, 5);

$formacion->incorporarVagonFormacion($vagon1);
$formacion->incorporarVagonFormacion($vagonCarga);
$formacion->incorporarVagonFormacion($vagon);

$formacion->incorporarPasajeroFormacion(6);

echo $vagon1; 
echo $vagonCarga;
echo $vagon;

$formacion->incorporarPasajeroFormacion(14);

echo $locomotora;

$formacion->promedioPasajeroFormacion();

echo $formacion;

$formacion->pesoFormacion();

echo $formacion;

echo $vagon1; 
echo $vagonCarga;
echo $vagon;

?>