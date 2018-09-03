<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserOrder
 *
 * @ORM\Table(name="user_order")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UserOrderRepository")
 */
class UserOrder
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
     * @ORM\ManyToOne(targetEntity="User")
     */
    private $user;

    /**
     * @var Article
     *
     * @ORM\OneToMany(targetEntity="Article", mappedBy="userOrder")
     */
    private $article;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantity", type="integer")
     */
    private $quantity;

    /**
     * @var string
     *
     * @ORM\Column(name="firstName", type="string", length=255)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="lastName", type="string", length=255)
     */
    private $lastName;

    /**
     * @var string
     *
     * @ORM\Column(name="billingAdress", type="string", length=255)
     */
    private $billingAdress;


    /**
     * @var string
     *
     * @ORM\Column(name="deliveryAdress", type="string", length=255)
     */
    private $deliveryAdress;


    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var bool
     *
     * @ORM\Column(name="gift", type="boolean")
     */
    private $gift;

    /**
     * @var date
     *
     * @ORM\Column(name="validatedAt", type="date")
     */
    private $validatedAt;

    /**
     * @var Admin
     *
     * @ORM\ManyToOne(targetEntity="Admin", inversedBy="userOrderPending")
     */
    private $userOrderPending;

    /**
     * @var Admin
     *
     * @ORM\ManyToOne(targetEntity="Admin", inversedBy="userOrderComplete")
     */
    private $userOrderComplete;

    /**
     * @var Cart
     *
     * @ORM\OneToOne(targetEntity="Cart", inversedBy="userOrder")
     */
    private $cart;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->article = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set quantity.
     *
     * @param int $quantity
     *
     * @return UserOrder
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
     * Set firstName.
     *
     * @param string $firstName
     *
     * @return UserOrder
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName.
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName.
     *
     * @param string $lastName
     *
     * @return UserOrder
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName.
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set billingAdress.
     *
     * @param string $billingAdress
     *
     * @return UserOrder
     */
    public function setBillingAdress($billingAdress)
    {
        $this->billingAdress = $billingAdress;

        return $this;
    }

    /**
     * Get billingAdress.
     *
     * @return string
     */
    public function getBillingAdress()
    {
        return $this->billingAdress;
    }

    /**
     * Set deliveryAdress.
     *
     * @param string $deliveryAdress
     *
     * @return UserOrder
     */
    public function setDeliveryAdress($deliveryAdress)
    {
        $this->deliveryAdress = $deliveryAdress;

        return $this;
    }

    /**
     * Get deliveryAdress.
     *
     * @return string
     */
    public function getDeliveryAdress()
    {
        return $this->deliveryAdress;
    }

    /**
     * Set email.
     *
     * @param string $email
     *
     * @return UserOrder
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email.
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set gift.
     *
     * @param bool $gift
     *
     * @return UserOrder
     */
    public function setGift($gift)
    {
        $this->gift = $gift;

        return $this;
    }

    /**
     * Get gift.
     *
     * @return bool
     */
    public function getGift()
    {
        return $this->gift;
    }

    /**
     * Set validatedAt.
     *
     * @param \DateTime $validatedAt
     *
     * @return UserOrder
     */
    public function setValidatedAt($validatedAt)
    {
        $this->validatedAt = $validatedAt;

        return $this;
    }

    /**
     * Get validatedAt.
     *
     * @return \DateTime
     */
    public function getValidatedAt()
    {
        return $this->validatedAt;
    }

    /**
     * Set user.
     *
     * @param \AppBundle\Entity\User|null $user
     *
     * @return UserOrder
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
     * Add article.
     *
     * @param \AppBundle\Entity\Article $article
     *
     * @return UserOrder
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
     * Get article.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getArticle()
    {
        return $this->article;
    }

    /**
     * Set userOrderPending.
     *
     * @param \AppBundle\Entity\Admin|null $userOrderPending
     *
     * @return UserOrder
     */
    public function setUserOrderPending(\AppBundle\Entity\Admin $userOrderPending = null)
    {
        $this->userOrderPending = $userOrderPending;

        return $this;
    }

    /**
     * Get userOrderPending.
     *
     * @return \AppBundle\Entity\Admin|null
     */
    public function getUserOrderPending()
    {
        return $this->userOrderPending;
    }

    /**
     * Set userOrderComplete.
     *
     * @param \AppBundle\Entity\Admin|null $userOrderComplete
     *
     * @return UserOrder
     */
    public function setUserOrderComplete(\AppBundle\Entity\Admin $userOrderComplete = null)
    {
        $this->userOrderComplete = $userOrderComplete;

        return $this;
    }

    /**
     * Get userOrderComplete.
     *
     * @return \AppBundle\Entity\Admin|null
     */
    public function getUserOrderComplete()
    {
        return $this->userOrderComplete;
    }

    /**
     * Set cart.
     *
     * @param \AppBundle\Entity\Cart|null $cart
     *
     * @return UserOrder
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
