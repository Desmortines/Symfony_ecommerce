<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\Article;
use AppBundle\Entity\Cart;
use AppBundle\Entity\User;
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
    public function addToCart(Article $article, User $user)
    {
        $em = $this->getDoctrine()->getManager();

        $cart = new Cart();

        $em->getRepository(AppBundle::Cart);

        $em->getRepository(AppBundle::CartElement)->setArticle($article.id);

        $em->persist($cart);

        $em->flush();

        return $this->redirectToRoute('cart_index');
    }
}