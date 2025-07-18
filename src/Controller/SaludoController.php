<?php
// EJERCICIO 1 TP 1
// EJERCICIO 3 TP 1
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class SaludoController extends AbstractController
{
    #[Route('/saludo/{nombre}', name: 'app_saludo')]
    public function index(string $nombre): Response
    {
        return $this->render('saludo/index.html.twig', [
            'nombre' => $nombre,
        ]);
    }
}
