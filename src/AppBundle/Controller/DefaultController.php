<?php

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

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
     * @Route("/legal_mention", name="legal_mention")
     */
    public function legal_mentionAction()
    {
        return $this->render('legality/legal_mention.html.twig');
    }

    /**
     * @Route("/cgv", name="CGV")
     */
    public function CGVAction()
    {
        return $this->render('legality/general condition of sale.html.twig');
    }

    /**
     * @Route("/RGPD", name="RGPD")
     */
    public function RGPDAction()
    {
        return $this->render('legality/RGPD.html.twig');
    }
}
