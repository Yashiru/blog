<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ExerciseController extends Controller
{
    /**
     * @Route("/test", name="test")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->renderView('exercice/exercice.html.twig',
        Response::HTTP_OK,
        [
            'X-My-Header' => "The ninth arena",
        ]);
    }



}
