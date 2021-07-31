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
        $answers = [
            'Hey this is a cat,',
            'Hey it is a car',
            'This is answer 4'
        ];

        return $this->render('question/show.html.twig', [
            'answers' => $answers,
            'question' => ucwords(str_replace('-', ' ', $slug))
        ]);
    }
}
