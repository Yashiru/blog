<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ExerciseController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'headerTitle' => "The ninth arena",
        ]);
    }


    /**
     *    @Route("/{id}",
     *    requirements={"id" = "\d+"},
     *    defaults={"id" = 1},
     *    name="show_article")
     */
    public function showAction($id)
    {
        // replace this example code with whatever you need

        return $this->render('default/show.html.twig');
    }


    /**
     * @Route("/users", name="users")
     */
    public function usersAction()
    {
        return new Response('Hello', 500, ['X-My-Header' => "Youhou j'ai fait mon propre header"]);
    }
}
