<?php

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     * @Method("GET")
     */
    public function indexAction()
    {
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')) . DIRECTORY_SEPARATOR,
        ]);
    }


    /**
     * @Route("/basket", name="basket")
     */
    public function basketAction()
    {
        return $this->render('basket.html.twig');
    }

    /**
     * @Route("/command", name="command")
     */
    public function commandAction()
    {
        return $this->render('command.html.twig');
    }

    /**
     * @Route("/article_search")
     */
    public function searchArticle(Request $request)
    {
        $q = $request->query->get('term'); // use "term" instead of "q" for jquery-ui
        $results = $this->getDoctrine()->getRepository('AppBundle:Article')->findLike($q);

        return $this->render('search/search.json.twig', ['results' => $results]);
    }
}
