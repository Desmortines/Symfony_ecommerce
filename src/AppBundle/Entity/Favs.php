<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Favs
 *
 * @ORM\Table(name="favs")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\FavsRepository")
 */
class Favs
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\OneToMany(targetEntity="Genre", mappedBy="name")
     */
    private $genre;

    /**
     * @var User
     *
     * @ORM\OneToOne(targetEntity="User")
     */
    private $user;

    /**
     * @var Article
     *
     * @ORM\OneToMany(targetEntity="Article", mappedBy="fav")
     */
    private $article;


    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set genre.
     *
     * @param string $genre
     *
     * @return Favs
     */
    public function setGenre($genre)
    {
        $this->genre = $genre;

        return $this;
    }

    /**
     * Get genre.
     *
     * @return string
     */
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * Set user.
     *
     * @param int $user
     *
     * @return Favs
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user.
     *
     * @return int
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set articles.
     *
     * @param array $articles
     *
     * @return Favs
     */
    public function setArticles($articles)
    {
        $this->articles = $articles;

        return $this;
    }

    /**
     * Get articles.
     *
     * @return array
     */
    public function getArticles()
    {
        return $this->articles;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->genre = new \Doctrine\Common\Collections\ArrayCollection();
        $this->article = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add genre.
     *
     * @param \AppBundle\Entity\Genre $genre
     *
     * @return Favs
     */
    public function addGenre(\AppBundle\Entity\Genre $genre)
    {
        $this->genre[] = $genre;

        return $this;
    }

    /**
     * Remove genre.
     *
     * @param \AppBundle\Entity\Genre $genre
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeGenre(\AppBundle\Entity\Genre $genre)
    {
        return $this->genre->removeElement($genre);
    }

    /**
     * Add article.
     *
     * @param \AppBundle\Entity\Articles $article
     *
     * @return Favs
     */
    public function addArticle(\AppBundle\Entity\Articles $article)
    {
        $this->article[] = $article;

        return $this;
    }

    /**
     * Remove article.
     *
     * @param \AppBundle\Entity\Articles $article
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeArticle(\AppBundle\Entity\Articles $article)
    {
        return $this->article->removeElement($article);
    }

    /**
     * Get article.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getArticle()
    {
        return $this->article;
    }
}
