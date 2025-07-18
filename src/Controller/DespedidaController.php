<?php
// EJERCICIO 1 TP 1
// EJERCICIO 3 TP 1


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class DespedidaController extends AbstractController
{
    #[Route('/despedida/{nombre}', name: 'app_despedida')]
    public function index(string $nombre): Response
    {
        return $this->render('despedida/index.html.twig', [
            'nombre' => $nombre,
        ]);
    }
}
