<?php
// EJERCICIO 2 TP 2
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class EstudiantesController extends AbstractController
{
    #[Route('/estudiantes', name: 'app_estudiantes')]
    public function index(): Response
    {
        $estudiantes = [
            // ['nombre' => 'Adri', 'nota' => 8],
            // ['nombre' => 'Tomi', 'nota' => 5],
            // ['nombre' => 'Angie', 'nota' => 9],
        ];

        return $this->render('estudiantes/index.html.twig', [
            'estudiantes' => $estudiantes,
        ]);
    }
}
