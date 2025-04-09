<?php
require_once "Fraccion.php";

// Crear fracciones (puedes cambiar estos valores según el escenario que imagines)
$f1 = new Fraccion(3, 4);   // 3/4
$f2 = new Fraccion(5, 6);   // 5/6

// Sumar
$suma = $f1->sumar($f2);
echo "Suma: " . $suma->toString() . "<br>";

// Restar
$resta = $f1->restar($f2);
echo "Resta: " . $resta->toString() . "<br>";

// Multiplicar
$multi = $f1->multiplicar($f2);
echo "Multiplicación: " . $multi->toString() . "<br>";

// Dividir
$div = $f1->dividir($f2);
echo "División: " . $div->toString() . "<br>";
?>