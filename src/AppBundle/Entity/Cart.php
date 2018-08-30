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
     * @var CartElement
     *
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\CartElement", mappedBy="cart")
     */
    private $cartElement;


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

    /**
     * Add cartElement.
     *
     * @param \AppBundle\Entity\CartElement $cartElement
     *
     * @return Cart
     */
    public function addCartElement(\AppBundle\Entity\CartElement $cartElement)
    {
        $this->cartElement[] = $cartElement;

        return $this;
    }

    /**
     * Remove cartElement.
     *
     * @param \AppBundle\Entity\CartElement $cartElement
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeCartElement(\AppBundle\Entity\CartElement $cartElement)
    {
        return $this->cartElement->removeElement($cartElement);
    }

    /**
     * Get cartElement.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCartElement()
    {
        return $this->cartElement;
    }
}
