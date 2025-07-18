<?php
// EJERCICIO 2 TP 1
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class EstadoDeAnimoController extends AbstractController
{
    #[Route('/estado/{nombre}/{estado?}', name: 'app_estado')]
    public function index(string $nombre, ?string $estado = null): Response
    {
        return $this->render('estado_de_animo/index.html.twig', [
            'nombre' => $nombre,
            'estado' => $estado,
        ]);
    }
}
