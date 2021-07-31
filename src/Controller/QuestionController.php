<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function index()
    {
        return new Response ('This is the landing page');
    }

    /**
     * @Route("/question", name="question")
     */
    public function homepage(): Response
    {
        return $this->json([
            'message' => 'The name of the page is homepage!',
            'path' => 'src/Controller/QuestionController.php',
        ]);
    }

    /**
     * @Route("/questions/{slug}")
     */
    public function show($slug = null)
    {
        return new Response(sprintf(
            "Show All Questions '%s'.",
            ucwords(str_replace('-', ' ', $slug))
        ));
    }
}
