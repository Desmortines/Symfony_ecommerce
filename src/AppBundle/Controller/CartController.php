<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\Article;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;



/**
 * Cart controller.
 *
 * @Route("cart")
 */
class CartController extends Controller
{
    /**
     * @Route("/", name="cart_index")
     */
    public function indexAction()
    {
        return $this->render('cart/index.html.twig');
    }

    public function quantityAction()
    {
        $em = $this->getDoctrine()->getManager();

        $quantity = $em->getRepository();
    }

    /**
     * @Route("/addtocart", name="cart_add")
     */
    public function addToCart(Article $article)
    {
        $em = $this->getDoctrine()->getManager();

        $em->getRepository(AppBundle::Cart)->setUser($user.id);

        $em->getRepository(AppBundle::CartElement)->setArticle($article.id);

        $em->flush();

        return $this->render('cart_index');
    }
}