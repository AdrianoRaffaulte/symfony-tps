<?php

namespace App\Controller;

use App\Service\FechaService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FechaController extends AbstractController
{
    #[Route('/fecha', name: 'app_fecha')]
    public function index(FechaService $fechaService): Response
    {
        $fechaFormateada = $fechaService->obtenerFechaFormateada();

        return new Response("<h1>Fecha actual: $fechaFormateada</h1>");
    }
}
