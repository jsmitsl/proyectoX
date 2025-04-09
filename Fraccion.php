<?php
class Fraccion {
    private int $numerador;
    private int $denominador;

    public function __construct(int $numerador, int $denominador) {
        if ($denominador == 0) {
            throw new Exception("El denominador no puede ser 0.");
        }
        $this->numerador = $numerador;
        $this->denominador = $denominador;
        $this->simplificar();
    }

    // Getters
    public function getNumerador(): int {
        return $this->numerador;
    }

    public function getDenominador(): int {
        return $this->denominador;
    }

    // Simplificación de la fracción
    public function simplificar(): void {
        $mcd = $this->mcd($this->numerador, $this->denominador);
        $this->numerador /= $mcd;
        $this->denominador /= $mcd;
    }

    // Método toString (solo fracción)
    public function toString(): string {
        return $this->numerador . "/" . $this->denominador;
    }

    // Método MCD (Máximo Común Divisor)
    private function mcd(int $a, int $b): int {
        while ($b != 0) {
            $temp = $b;
            $b = $a % $b;
            $a = $temp;
        }
        return $a;
    }

    // Operaciones
    public function sumar(Fraccion $otra): Fraccion {
        $num = $this->numerador * $otra->getDenominador() + $otra->getNumerador() * $this->denominador;
        $den = $this->denominador * $otra->getDenominador();
        return new Fraccion($num, $den);
    }

    public function restar(Fraccion $otra): Fraccion {
        $num = $this->numerador * $otra->getDenominador() - $otra->getNumerador() * $this->denominador;
        $den = $this->denominador * $otra->getDenominador();
        return new Fraccion($num, $den);
    }

    public function multiplicar(Fraccion $otra): Fraccion {
        $num = $this->numerador * $otra->getNumerador();
        $den = $this->denominador * $otra->getDenominador();
        return new Fraccion($num, $den);
    }

    public function dividir(Fraccion $otra): Fraccion {
        if ($otra->getNumerador() == 0) {
            throw new Exception("No se puede dividir entre una fracción con numerador 0.");
        }
        $num = $this->numerador * $otra->getDenominador();
        $den = $this->denominador * $otra->getNumerador();
        return new Fraccion($num, $den);
    }

    // Método para convertir la fracción a número mixto
    public function aNumeroMixto(): array {
        $entero = intdiv($this->numerador, $this->denominador);
        $numeradorRestante = abs($this->numerador % $this->denominador);
        return [$entero, new Fraccion($numeradorRestante, $this->denominador)];
    }
}
?>