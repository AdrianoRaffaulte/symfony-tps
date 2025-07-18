<?php
// EJERCICIO 7 TP 1
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class EdadController extends AbstractController
{
    #[Route('/mayoria-edad/{edad}', name: 'app_edad')]
    public function index(int $edad): Response
    {
        $mensaje = $edad >= 18
            ? 'Sos mayor de edad.'
            : 'Sos menor de edad.';

        return $this->render('edad/index.html.twig', [
            'edad' => $edad,
            'mensaje' => $mensaje,
        ]);
    }
}
