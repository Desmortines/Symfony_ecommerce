<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CartElement
 *
 * @ORM\Table(name="cart_element")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CartElementRepository")
 */
class CartElement
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
     * @ORM\OneToOne(targetEntity="Article")
     */
    private $article;

    /**
     * @var int
     *
     * @ORM\Column(name="quantity", type="integer")
     */
    private $quantity;

    /**
     * @var bool
     *
     * @ORM\Column(name="isGift", type="boolean")
     */
    private $isGift;

    /**
     * @var Cart
     *
     * @ORM\ManyToOne(targetEntity="Cart", inversedBy="cartElement")
     */
    private $cart;
    

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
     * Set quantity.
     *
     * @param int $quantity
     *
     * @return CartElement
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity.
     *
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set isGift.
     *
     * @param bool $isGift
     *
     * @return CartElement
     */
    public function setIsGift($isGift)
    {
        $this->isGift = $isGift;

        return $this;
    }

    /**
     * Get isGift.
     *
     * @return bool
     */
    public function getIsGift()
    {
        return $this->isGift;
    }

    /**
     * Set article.
     *
     * @param \AppBundle\Entity\Article|null $article
     *
     * @return CartElement
     */
    public function setArticle(\AppBundle\Entity\Article $article = null)
    {
        $this->article = $article;

        return $this;
    }

    /**
     * Get article.
     *
     * @return \AppBundle\Entity\Article|null
     */
    public function getArticle()
    {
        return $this->article;
    }

    /**
     * Set cart.
     *
     * @param \AppBundle\Entity\Cart|null $cart
     *
     * @return CartElement
     */
    public function setCart(\AppBundle\Entity\Cart $cart = null)
    {
        $this->cart = $cart;

        return $this;
    }

    /**
     * Get cart.
     *
     * @return \AppBundle\Entity\Cart|null
     */
    public function getCart()
    {
        return $this->cart;
    }
}
