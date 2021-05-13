<?php

declare(strict_types=1);

namespace App\UserInterface\Api\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

final class ListOrdersController
{
    #[Route('/api/orders', name: 'api_list_orders')]
    public function __invoke(Request $request): Response
    {
        return new JsonResponse();
    }
}
