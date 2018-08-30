<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cart
 *
 * @ORM\Table(name="cart")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CartRepository")
 */
class Cart
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
     * @var Article
     *
     * @ORM\ManyToMany(targetEntity="Article", mappedBy="cart")
     */
    private $article;

    /**
     * @var array
     *
     * @ORM\Column(name="quantity", type="array")
     */
    private $quantity;

    /**
     * @var User
     *
     * @ORM\OneToOne(targetEntity="User")
     */
    private $user;

    /**
     * @var float
     *
     * @ORM\Column(name="preTotal", type="float")
     */
    private $preTotal;

    /**
     * @var float
     *
     * @ORM\Column(name="total", type="float")
     */
    private $total;

    /**
     * @var int
     *
     * @ORM\Column(name="articleAmount", type="integer")
     */
    private $articleAmount;

    /**
     * @var int
     *
     * @ORM\Column(name="cartArticleQuantity", type="integer")
     */
    private $cartArticleQuantity;


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
     * Set article.
     *
     * @param array $article
     *
     * @return Cart
     */
    public function setArticle($article)
    {
        $this->article = $article;

        return $this;
    }

    /**
     * Get article.
     *
     * @return array
     */
    public function getArticle()
    {
        return $this->article;
    }

    /**
     * Set quantity.
     *
     * @param array $quantity
     *
     * @return Cart
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity.
     *
     * @return array
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set user.
     *
     * @param int $user
     *
     * @return Cart
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
     * Set preTotal.
     *
     * @param float $preTotal
     *
     * @return Cart
     */
    public function setPreTotal($preTotal)
    {
        $this->preTotal = $preTotal;

        return $this;
    }

    /**
     * Get preTotal.
     *
     * @return float
     */
    public function getPreTotal()
    {
        return $this->preTotal;
    }

    /**
     * Set total.
     *
     * @param float $total
     *
     * @return Cart
     */
    public function setTotal($total)
    {
        $this->total = $total;

        return $this;
    }

    /**
     * Get total.
     *
     * @return float
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * Set articleAmount.
     *
     * @param int $articleAmount
     *
     * @return Cart
     */
    public function setArticleAmount($articleAmount)
    {
        $this->articleAmount = $articleAmount;

        return $this;
    }

    /**
     * Get articleAmount.
     *
     * @return int
     */
    public function getArticleAmount()
    {
        return $this->articleAmount;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->article = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add article.
     *
     * @param \AppBundle\Entity\Article $article
     *
     * @return Cart
     */
    public function addArticle(\AppBundle\Entity\Article $article)
    {
        $this->article[] = $article;

        return $this;
    }

    /**
     * Remove article.
     *
     * @param \AppBundle\Entity\Article $article
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeArticle(\AppBundle\Entity\Article $article)
    {
        return $this->article->removeElement($article);
    }
}
