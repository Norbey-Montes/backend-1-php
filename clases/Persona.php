<?php

class Persona
{
    public function saludar()
    {
        echo "hola este es el primer ejercicio con programacion orientada a objetos <br>";
    }
}

$persona = new Persona();




class Calculador
{
    public function sumar($a, $b)
    {
        $a = 10;
        $b = 5;

        echo "El resultado de la suma es: " . ($a + $b) . "<br>";
        
    }
}

$calculador = new Calculador();



?>