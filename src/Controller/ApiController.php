<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ApiController extends AbstractController
{
    #[Route('/healthz', methods: [Request::METHOD_GET])]
    public function healthz(): Response
    {
        return new Response('Ok');
    }

    #[Route('/api/hostname', methods: [Request::METHOD_GET])]
    public function hostname(): Response
    {
        return $this->json(['hostname' => gethostname()]);
    }
}
