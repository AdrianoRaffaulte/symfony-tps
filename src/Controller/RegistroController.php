<?php
// Ejercicio 5: Mensaje aleatorio - TP1
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class RegistroController extends AbstractController
{
    #[Route('/registro', name: 'app_registro', methods: ['GET', 'POST'])]
    public function index(Request $request): Response
    {
        // Si viene por POST, procesamos los datos del formulario
        if ($request->isMethod('POST')) {
            $nombre = $request->request->get('nombre');
            $correo = $request->request->get('correo');

            return $this->render('registro/index.html.twig', [
                'nombre' => $nombre,
                'correo' => $correo,
                'datosRecibidos' => true,
            ]);
        }

        // Si es GET, simplemente mostramos el formulario vacío
        return $this->render('registro/index.html.twig', [
            'datosRecibidos' => false,
        ]);
    }
}

