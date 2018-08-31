<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Article;
use AppBundle\Entity\Cart;
use AppBundle\Entity\CartElement;
use AppBundle\Entity\User;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
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
        /** @var User $user */
        $user = $this->getUser();
       if ($user)
       {
           /** @var Cart $cart */
           $cart = $user->getCart()->first();
       }
       else
       {
           $cart = [];
       }

        return $this->render('cart/index.html.twig', array(
            'cart' => $cart,
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
     * @Route("/addtocart/{article}", name="cart_add")
     * @Method("GET")
     */
    public function addToCart(Article $article)
    {
        $em = $this->getDoctrine()->getManager();

        /** @var User $user */
        $user = $this->getUser();

        if ($user) {
            /** @var Cart $cart */
            $cart = $user->getCart()->first();
        } else return $this->redirectToRoute('cart_index');

        if (!$cart){
            $cart = new Cart();
            $cart->setUser($user);
            $cart->setTotal($article->getPrice());
            $cart->setPreTotal($article->getPrice());
            $cart->setArticleAmount(1);
        } else {
            $cart->setPreTotal($cart->getPreTotal()+$article->getPrice());
            $cart->setTotal($cart->getTotal()+$article->getPrice());
            $cart->setArticleAmount($cart->getArticleAmount()+1);
        }

        $cart_element = $em->getRepository('AppBundle:CartElement')
            ->findOneBy([
                'article' => $article,
            ]);

        if (!$cart_element) {
            $cart_element = new CartElement();
            $cart_element->setArticle($article);
            $cart_element->setQuantity(1);
            $cart_element->setCart($cart);
            $cart_element->setIsGift(0);
        } else {
            /** @var CartElement $cart_element */
            $cart_element->setQuantity($cart_element->getQuantity()+1);
        }

        $em->persist($cart);
        $em->persist($cart_element);
        $em->flush();

        return $this->redirectToRoute('cart_index');
    }
}