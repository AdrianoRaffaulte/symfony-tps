<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

final class ApiController extends AbstractController
{
    #[Route('/api/usuario/{id}', name: 'api_usuario')]
    public function usuario(int $id): JsonResponse
    {
        $usuario = [
            'id' => $id,
            'nombre' => 'Usuario ' . $id,
            'email' => 'usuario' . $id . '@ejemplo.com'
        ];

        return new JsonResponse($usuario);
    }
}
