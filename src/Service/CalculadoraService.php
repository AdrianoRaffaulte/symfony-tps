<?php
// EJERCICIO 1 TP 3
namespace App\Service;

class CalculadoraService
{
    public function sumar($a, $b)
    {
        return $a + $b;
    }

    public function restar($a, $b)
    {
        return $a - $b;
    }

    public function multiplicar($a, $b)
    {
        return $a * $b;
    }

    public function dividir($a, $b)
    {
        if ($b == 0) {
            throw new \InvalidArgumentException("No se puede dividir por cero.");
        }
        return $a / $b;
    }
}
