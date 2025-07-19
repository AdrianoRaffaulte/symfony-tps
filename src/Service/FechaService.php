<?php
// EJERCICIO 2 TP 3
namespace App\Service;

class FechaService
{
    private $formato;

    public function __construct(string $formato)
    {
        $this->formato = $formato;
    }

    public function obtenerFechaFormateada(): string
    {
        return (new \DateTime())->format($this->formato);
    }
}
