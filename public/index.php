<?php

require_once "../clases/Persona.php";

$norbey = new $persona();

$norbey->saludar();

$calculador = new $calculador();

$calculador->sumar(10, 5);




require_once '../clases/animal.php';

$perro1 = new Perro();
$perro2 = new Perro();

echo $perro1->ladrar();
echo $perro2->correr();

?>