<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeControllerTwig extends AbstractController
{
    #[Route("/", name: "home")]
    public function home(): Response
    {
        return $this->render('home.html.twig');
    }

    #[Route("/about", name: "about")]
    public function about(): Response
    {
        return $this->render('about.html.twig');
    }

    #[Route("/report", name: "report")]
    public function report(): Response
    {
        return $this->render('report.html.twig');
    }
    #[Route("/lucky", name: "lucky")]
    public function lucky(): Response
    {
        $fortune = [
            "Your past is influencing your future.",
            "What you seek is seeking you.",
            "A secret admirer will soon send you a sign of affection.",
            "Something you lost will turn up soon.",
            "An exciting opportunity lies ahead of you",
            "You will receive money from an unexpected source.",
            "Your lucky number is" . random_int(1, 99)
        ];

        $fortunes = $fortune[array_rand($fortune)];

        return $this->render('lucky.html.twig', ['fortunes' => $fortunes,
        ]);
    }
}
