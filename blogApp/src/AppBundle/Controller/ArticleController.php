<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Article;
use AppBundle\Form\ArticleType;

class ArticleController extends Controller
{
    /**
    * @Route("/", name="article_homepage")
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
     *    name="article_show")
     */
     public function articleAction(Request $request)
     {
        return $this->render("article/show.html.twig");
     }

     /**
     * @Route("/add", name="article_add")
     */
     public function addAction(Request $request)
     {
       $headerTitle = "Add article";
       $article = new Article();
       $articleForm = $this->createForm(ArticleType::class, $article);

       $articleForm->handleRequest($request);

       if($articleForm->isValid()){
         $em = $this->getDoctrine()->getManager();

         $em->persist($article);
         $em->flush();

         $this->addFlash('sucess', 'The article was successfully saved in database!');

         return $this->redirect('article_homepage');
       }
        return $this->render('article/add.html.twig',  ["headerTitle" => $headerTitle, "articleForm" => $articleForm->createView()]);
     }

     /**
      * @Route("/update/{id}", name="article_update")
      */

      public function updateAction(Article $article){
        dump($article); die;
      }
}
