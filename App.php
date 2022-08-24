<?php
include_once 'Escritorio.php';

$bozzano = new Escritorio;
$bozzano->setPatrimonio(905000);
echo "<br>\nPatrimonio: ".$bozzano->getPatrimonio();
$bozzano->investir(225000);
$bozzano->pagarDivida(20000);
$bozzano->encerrar("Bozzano");
?>