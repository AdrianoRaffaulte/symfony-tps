<?php
// Ejercicio 4: Mensaje aleatorio - TP1
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class AleatorioController extends AbstractController
{
    #[Route('/aleatorio', name: 'app_aleatorio')]
    public function index(): Response
    {
        $nombres = ['Adriano', 'Tomás', 'Angelina', 'André', 'Sofía', 'Agostina'];
        $saludos = ['¡Hola', '¡Buenas tardes', '¡Buen día', '¡Qué tal', '¡Saludos'];

        $nombre = $nombres[array_rand($nombres)];
        $saludo = $saludos[array_rand($saludos)];

        $mensaje = "$saludo, $nombre!";

        return $this->render('aleatorio/index.html.twig', [
            'mensaje' => $mensaje,
        ]);
    }
}
