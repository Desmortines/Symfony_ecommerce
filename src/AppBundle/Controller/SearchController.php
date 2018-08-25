<?php
/**
 * Created by PhpStorm.
 * User: quent
 * Date: 24/08/2018
 * Time: 15:16
 */

namespace AppBundle\Controller;


use AppBundle\Entity\Article;
use AppBundle\Entity\Category;
use AppBundle\Entity\Genre;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SearchType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;

class SearchController extends Controller
{

    /**
     * @Route("/search", name="search_index")
     * @Method("GET")
     */

    public function indexAction() {
        return $this->redirectToRoute('homepage');
    }

    /**
     * @Route("/search", name="search_action")
     *
     */

    public function searchAction(Request $request)
    {
        $form = $this->createFormBuilder()
            ->setAction($this->generateUrl('search_action'))
            ->add('textSearch', SearchType::class, [
                'attr' => [
                    'placeholder' => 'Recherche'
                ]
            ])
            ->add('categorySearch', EntityType::class, [
                'class' => 'AppBundle\Entity\Category',
                'choice_label' => 'name',
                'multiple' => true,
                'required' => false,
            ])
            ->add('genreSearch',EntityType::class,[
                'class' => 'AppBundle\Entity\Genre',
                'choice_label' => 'name',
                'multiple' => true,
                'required' => false,
            ])
            ->add('send', SubmitType::class, [
                'label' => 'Ok'
            ])
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $search = $form->getData();

            if ($search['categorySearch'] && $search['genreSearch']) {
                dump($search['categorySearch']);
                dump($search['genreSearch']);
                $article = $this->getDoctrine()
                    ->getRepository(Article::class)
                    ->findCategoryGenreLike($search);
                $category = [];
                $genre = [];
            }
            elseif ($search['categorySearch']) {
                dump($search['categorySearch']);
                $category = [];
                $genre = [];
            }
            elseif ($search['genreSearch']) {
                dump($search['genreSearch']);
                $category = [];
                $genre = [];
            }
            else {
                $article = $this->getDoctrine()
                    ->getRepository(Article::class)
                    ->findLike($search['textSearch']);
                $category = $this->getDoctrine()
                    ->getRepository(Category::class)
                    ->findLike($search['textSearch']);
                $genre = $this->getDoctrine()
                    ->getRepository(Genre::class)
                    ->findLike($search['textSearch']);
            }
            return $this->render('result.html.twig', [
                'ArticleSearch' => $article,
                'CategorySearch' => $category,
                'GenreSearch' => $genre,
            ]);
        }

        return $this->render('search_bar_form.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}