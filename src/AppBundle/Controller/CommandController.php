<?php

namespace AppBundle\Controller;

use AppBundle\Entity\User;
use AppBundle\Entity\UserOrder;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * Command controller.
 *
 * @Route("command")
 */
class CommandController extends Controller
{
    /**
     * @Route("/", name="command_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        /** @var User $user */
        $user = $this->getUser();
        $em = $this->getDoctrine()->getManager();
        /** @var UserOrder $userOrders */
        $userOrders = $em->getRepository('AppBundle:UserOrder')->findBy([
            'user' => $user
        ]);
        return $this->render('command/index.html.twig', [
            'userOrders' => $userOrders
        ]);
    }
}
