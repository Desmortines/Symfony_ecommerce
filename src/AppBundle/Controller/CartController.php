<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
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

        $quantity = $em->getRepository()
    }
}
