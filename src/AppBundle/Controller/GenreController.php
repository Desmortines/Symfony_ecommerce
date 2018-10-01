<?php
/**
 * Created by PhpStorm.
 * User: quent
 * Date: 28/08/2018
 * Time: 13:46
 */

namespace AppBundle\Controller;


use AppBundle\Entity\Genre;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * GenreController
 * @Route("genre")
 */
class GenreController extends Controller
{
    /**
     * @Route("/",name="genre_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $genres = $em->getRepository('AppBundle:Genre')
            ->findAll();

        return $this->render('genre/index.html.twig',[
            'genres' => $genres,
        ]);
    }

    /**
     * Finds and displays a genre entity.
     *
     * @Route("/{id}", name="genre_show")
     * @Method("GET")
     */
    public function showAction(Genre $genre) {
        return $this->render('genre/show.html.twig',[
            'genre' => $genre,
        ]);
    }


}