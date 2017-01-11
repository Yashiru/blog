<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ArticleController extends Controller
{
    /**
    * @Route("/", name="articlePage")
    */
    public function homepageAction(Request $request)
    {
        $headerTitle = "The ninth arena";
        return $this->render("article/index.html.twig", ["headerTitle" => $headerTitle]);
    }

    /**
     *    @Route("/{id}",
     *    requirements={"id" = "\d+"},
     *    defaults={"id" = 1},
     *    name="show_article")
     */
     public function articleAction(Request $request)
     {
        return $this->render("article/show.html.twig");
     }
}
