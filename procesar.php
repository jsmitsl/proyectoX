<?php
require_once "Fraccion.php";

// Función para convertir número mixto a fracción propia
function mixtoAFraccion(int $entero, int $numerador, int $denominador): Fraccion {
    $numeradorTotal = $entero * $denominador + $numerador;
    return new Fraccion($numeradorTotal, $denominador);
}

$entero1 = $_POST['entero1'];
$num1 = $_POST['num1'];
$den1 = $_POST['den1'];
$entero2 = $_POST['entero2'];
$num2 = $_POST['num2'];
$den2 = $_POST['den2'];
$operacion = $_POST['operacion'];

try {
    // Convertir las fracciones mixtas a fracciones propias
    $f1 = mixtoAFraccion($entero1, $num1, $den1);
    $f2 = mixtoAFraccion($entero2, $num2, $den2);

    $resultado = null;

    // Realizar la operación correspondiente
    switch ($operacion) {
        case "sumar":
            $resultado = $f1->sumar($f2);
            break;
        case "restar":
            $resultado = $f1->restar($f2);
            break;
        case "multiplicar":
            $resultado = $f1->multiplicar($f2);
            break;
        case "dividir":
            $resultado = $f1->dividir($f2);
            break;
        default:
            throw new Exception("Operación no válida.");
    }

    // Obtener el número mixto del resultado
    list($enteroResultado, $fraccionResultado) = $resultado->aNumeroMixto();

    // Mostrar el resultado
    echo "<h2>Resultado:</h2>";
    echo "Fracción 1: " . $f1->toString() . "<br>";
    echo "Fracción 2: " . $f2->toString() . "<br>";
    echo "Operación: $operacion <br><br>";

    // Mostrar el resultado separado
    echo "<h1>Resultado: </h1>";
    echo "<h2>Parte entera: $enteroResultado</h2>";
    echo "Fracción restante: " . $fraccionResultado->toString() . "<br>";
    
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>