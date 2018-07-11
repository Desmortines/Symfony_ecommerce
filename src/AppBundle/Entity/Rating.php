<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rating
 *
 * @ORM\Table(name="rating")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\RatingRepository")
 */
class Rating
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
     * @var int
     *
     * @ORM\Column(name="user", type="integer")
     * @ORM\OneToMany(targetEntity="User", mappedBy="id")
     */
    private $user;

    /**
     * @var int
     *
     * @ORM\Column(name="article", type="integer")
     * @ORM\OneToMany(targetEntity="Article", mappedBy="id")
     */
    private $article;

    /**
     * @var int
     *
     * @ORM\Column(name="rating", type="integer")
     */
    private $rating;

    /**
     * @var int|null
     *
     * @ORM\Column(name="linkedComment", type="integer", nullable=true)
     * @ORM\OneToMany(targetEntity="Comments", mappedBy="id")
     */
    private $linkedComment;


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
     * Set user.
     *
     * @param int $user
     *
     * @return Rating
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
     * Set article.
     *
     * @param int $article
     *
     * @return Rating
     */
    public function setArticle($article)
    {
        $this->article = $article;

        return $this;
    }

    /**
     * Get article.
     *
     * @return int
     */
    public function getArticle()
    {
        return $this->article;
    }

    /**
     * Set rating.
     *
     * @param int $rating
     *
     * @return Rating
     */
    public function setRating($rating)
    {
        $this->rating = $rating;

        return $this;
    }

    /**
     * Get rating.
     *
     * @return int
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * Set linkedComment.
     *
     * @param int|null $linkedComment
     *
     * @return Rating
     */
    public function setLinkedComment($linkedComment = null)
    {
        $this->linkedComment = $linkedComment;

        return $this;
    }

    /**
     * Get linkedComment.
     *
     * @return int|null
     */
    public function getLinkedComment()
    {
        return $this->linkedComment;
    }
}
