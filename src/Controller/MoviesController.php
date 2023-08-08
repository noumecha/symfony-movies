<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MoviesController extends AbstractController
{
    #[Route('/movies', name: 'movies')]
    public function index(): Response
    {
        $movies = ["World of Narnia : chapter 2","Avengers","The Matrix","Coah Carter"];

        return $this->render("index.html.twig",
        [
            "movies" => $movies,
            "title" => "All great movies you need to watch",
        ]);
    }

    /**
     * testMethod
     *
     * @Route("/test", name="test")
     */
    public function testMethod(): JsonResponse {
        return $this->json([
            'message' => 'test method',
            'path' => 'src/Controller/MoviesController.php',
        ]);
    }
}
