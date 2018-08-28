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
use Doctrine\ORM\EntityRepository;
use PUGX\AutocompleterBundle\Form\Type\AutocompleteType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SearchType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;

/**
 * @Route("/search")
 */
class SearchController extends Controller
{

    /**
     * @Route("/", name="search_index")
     * @Method("GET")
     */

    public function indexAction()
    {
        return $this->redirectToRoute('homepage');
    }

    /**
     * @Route("/", name="search_action")
     *
     */

    public function searchAction(Request $request)
    {
        $form = $this->createFormBuilder()
            ->setAction($this->generateUrl('search_action'))
            ->add('textSearch', AutocompleteType::class, [
                'class' => Article::class,
                'attr' => [
                    'placeholder' => 'Recherche'
                ]
            ])
            ->add('categorySearch', EntityType::class, [
                'class' => 'AppBundle\Entity\Category',
                'choice_label' => 'name',
                'required' => false,
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('c')
                        ->orderBy('c.name', 'ASC');
                },
            ])
            ->add('genreSearch', EntityType::class, [
                'class' => 'AppBundle\Entity\Genre',
                'choice_label' => 'name',
                'required' => false,
                'multiple' => true,
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('g')
                        ->orderBy('g.name', 'ASC');
                },
            ])
            ->add('send', SubmitType::class, [
                'label' => 'Ok'
            ])
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $search = $form->getData();

            if ($search['categorySearch'] && $search['genreSearch'][0]) {
                $article = $this->getDoctrine()
                    ->getRepository(Article::class)
                    ->findCategoryGenreLike($search);
                $category = [];
                $genre = [];
            } elseif ($search['categorySearch']) {
                $article = $this->getDoctrine()
                    ->getRepository(Article::class)
                    ->findCategoryLike($search);
                $category = [];
                $genre = [];
            } elseif ($search['genreSearch'][0]) {
                $article = $this->getDoctrine()
                    ->getRepository(Article::class)
                    ->findGenreLike($search);
                $category = [];
                $genre = [];
            } else {
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
            return $this->render('search/result.html.twig', [
                'ArticleSearch' => $article,
                'CategorySearch' => $category,
                'GenreSearch' => $genre,
            ]);
        }

        return $this->render('search/search_bar_form.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/article_search")
     */
    public function searchArticle(Request $request)
    {
        $q = $request->query->get('term'); // use "term" instead of "q" for jquery-ui
        $results = $this->getDoctrine()->getRepository('AppBundle:Article')->findLike($q);

        return $this->render('search/search.json.twig', ['results' => $results]);
    }

    /**
     * @Route("/article_get/{id}")
     */
    public function getArticle($id = null)
    {
        $article = $this->getDoctrine()->getRepository('AppBundle:Article')->find($id);

        return $this->json($article->getName());
    }
}