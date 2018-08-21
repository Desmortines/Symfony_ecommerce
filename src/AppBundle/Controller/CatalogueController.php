<?php
/**
 * Created by PhpStorm.
 * User: quent
 * Date: 21/08/2018
 * Time: 15:55
 */

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


/**
 * Class CatalogueController
 * @package AppBundle\Controller
 * @Route("catalogue")
 */
class CatalogueController extends Controller
{
    /**
     * @Route("/", name="index")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $categories = $em->getRepository('AppBundle:Category')
            ->findAll();


        return $this->render('catalogue/index.html.twig',[
            'categories' => $categories
        ]);
    }

    /**
     * @Route("/{id}",requirements={"id" = "\d+"},defaults={"id" = 1},name="showAction")
     */

    public function showAction($id) {
        $em = $this->getDoctrine()->getManager();

        $category = $em->getRepository('AppBundle:Category')
            ->find($id);

        return $this->render('catalogue/show.html.twig',[
            'category' => $category
        ]);
    }
}