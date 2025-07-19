<?php

namespace App\Controller;

use App\Service\CalculadoraService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CalculadoraController extends AbstractController
{
    #[Route('/calcular', name: 'app_calculadora')]
    public function index(CalculadoraService $calculadora): Response
    {
        $a = 10;
        $b = 5;

        $suma = $calculadora->sumar($a, $b);
        $resta = $calculadora->restar($a, $b);
        $multiplicacion = $calculadora->multiplicar($a, $b);
        $division = $calculadora->dividir($a, $b);

        return new Response("
            <h1>Resultados:</h1>
            <p>Suma: $suma</p>
            <p>Resta: $resta</p>
            <p>Multiplicación: $multiplicacion</p>
            <p>División: $division</p>
        ");
    }
}
