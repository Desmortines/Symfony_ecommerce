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
     * @ORM\Column(name="genre", type="string", length=255)
     * @ORM\OneToMany(targetEntity="Genre", mappedBy="name")
     */
    private $genre;

    /**
     * @var int
     *
     * @ORM\Column(name="user", type="integer", unique=true)
     * @ORM\OneToOne(targetEntity="User", mappedBy="id")
     */
    private $user;

    /**
     * @var array
     *
     * @ORM\Column(name="articles", type="array")
     * @ORM\OneToMany(targetEntity="Aeticles", mappedBy="id")
     */
    private $articles;


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
}
