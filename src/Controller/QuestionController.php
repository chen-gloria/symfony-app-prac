<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function homepage(): Response
    {
        return $this->render('question/homepage.html.twig');
        // return $this->json([
        //     'message' => 'The name of the page is homepage!',
        //     'path' => 'src/Controller/QuestionController.php',
        // ]);
    }

    /**
     * @Route("/questions/{slug}")
     */
    public function show($slug)
    {
        $answers = [
            'Hey this is a cat,',
            'Hey it is a car',
            'This is answer 4'
        ];

        // dump($slug, $this);

        return $this->render('question/show.html.twig', [
            'answers' => $answers,
            'question' => ucwords(str_replace('-', ' ', $slug))
        ]);
    }
}
