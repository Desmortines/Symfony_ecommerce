<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Article;
use AppBundle\Entity\Category;
use AppBundle\Entity\Genre;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SearchType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints\Length;

class DefaultController extends Controller
{
    /**
     * @Route("/search", name="searchAction")
     *
     */

    public function searchAction(Request $request)
    {
        $form = $this->createFormBuilder()
            ->setAction($this->generateUrl('searchAction'))
            ->add('search', SearchType::class, [
                'attr' => [
                    'placeholder' => 'Recherche'
                ]
            ])
            ->add('send',SubmitType::class,[
                'label' => 'Ok'
            ])
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $search = $form->getData();


            $article = $this->getDoctrine()
                ->getRepository(Article::class)
                ->findLike($search['search']);
            $category = $this->getDoctrine()
                ->getRepository(Category::class)
                ->findLike($search['search']);
            $genre = $this->getDoctrine()
                ->getRepository(Genre::class)
                ->findLike($search['search']);



            return $this->render('result.html.twig',[
                'ArticleSearch' => $article,
                'CategorySearch' => $category,
                'GenreSearch' => $genre,
            ]);
        }

        return $this->render('search_bar_form.html.twig',[
            'form' => $form->createView(),
        ]);
    }

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
}
