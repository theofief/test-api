<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class ApiTestController extends AbstractController
{
    #[Route('/api/test', name: 'api_test')]
    public function index(): JsonResponse
    {
        return $this->json([
            'message' => 'Hello from ApiTestController 👋',
        ]);
    }
}