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
     * @ORM\ManyToOne(targetEntity="User", inversedBy="cart")
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
     * @var UserOrder
     *
     * @ORM\OneToOne(targetEntity="UserOrder", mappedBy="cart")
     */
    private $userOrder;
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->cartElement = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * Set user.
     *
     * @param \AppBundle\Entity\User|null $user
     *
     * @return Cart
     */
    public function setUser(\AppBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user.
     *
     * @return \AppBundle\Entity\User|null
     */
    public function getUser()
    {
        return $this->user;
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

    /**
     * Set userOrder.
     *
     * @param \AppBundle\Entity\UserOrder|null $userOrder
     *
     * @return Cart
     */
    public function setUserOrder(\AppBundle\Entity\UserOrder $userOrder = null)
    {
        $this->userOrder = $userOrder;

        return $this;
    }

    /**
     * Get userOrder.
     *
     * @return \AppBundle\Entity\UserOrder|null
     */
    public function getUserOrder()
    {
        return $this->userOrder;
    }
}
