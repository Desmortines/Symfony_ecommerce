<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Article;
use AppBundle\Entity\CartElement;
use FOS\UserBundle\Model\UserInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\Cart;
use AppBundle\Entity\User;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;


/**
 * Cart controller.
 *
 * @Route("cart")
 */
class CartController extends Controller
{
    /**
     * @Route("/", name="cart_index")
     * @Method("GET")
     */
    public function indexAction()
    {
       //$cartElement = $this->getUser()->getCart();
       
       $user = $this->getUser();

       if ($user)
       {
           $cartElement = $user->getCart();
       }
       else
       {
           $cartElement = [];
       }

        return $this->render('cart/index.html.twig', array(
            //'cartElement' => $cartElement,
        ));
    }

    /**
     * @Route("/cart_element/{id}/update_quantity", name="cart_element_update_quantity")
     * @Method("POST")
     */
    public function cartElementUpdateQuantityAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $cartElement = $em->getRepository('AppBundle:CartElement')
            ->find($request->get("id"));
        var_dump($cartElement->getQuantity());
        /*return new JsonResponse([

        ])*/
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