<?php
/**
 * Created by PhpStorm.
 * User: quent
 * Date: 21/08/2018
 * Time: 15:55
 */

namespace AppBundle\Controller;


use AppBundle\Entity\Category;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
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
     * @Route("/", name="category_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $categories = $em->getRepository('AppBundle:Category')
            ->findAll();

        return $this->render('catalogue/index.html.twig', [
            'categories' => $categories
        ]);
    }

    /**
     * @Route("/{id}",requirements={"id" = "\d+"},name="category_show")
     * @Method("GET")
     */

    public function showAction(Category $category)
    {
        return $this->render('catalogue/show.html.twig', [
            'category' => $category
        ]);
    }
}