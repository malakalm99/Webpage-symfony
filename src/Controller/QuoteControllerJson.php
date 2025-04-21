<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuoteControllerJson
{
    #[Route("/api/quote")]
    public function jsonQuote(): Response
    {
        $quotes = [
            "Be the change that you wish to see in the world - Mahatma Gandhi",
            "The soul becomes dyed with the color of its thoughts - Marcus Aurelius",
            "The energy of the mind is the essence of life - Aristotle"
        ];

        $randquotes = $quotes[array_rand($quotes)];
        $shortdate = date('Y-m-d');
        $time = date('H:i:s');

        $data = [
            'Quote' => $randquotes,
            'Date' => $shortdate,
            'Time' => $time
        ];

        $response = new JsonResponse($data);
        $response->setEncodingOptions(
            $response->getEncodingOptions() | JSON_PRETTY_PRINT
        );

        return $response;

    }
}
