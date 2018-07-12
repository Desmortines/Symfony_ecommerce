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
     * @var int
     *
     * @ORM\Column(name="user", type="integer")
     * @ORM\ManyToOne(targetEntity="User", inversedBy="id")
     */
    private $user;

    /**
     * @var array
     *
     * @ORM\OneToMany(targetEntity="Article", mappedBy="id")
     */
    private $article;

    /**
     * @var array
     *
     * @ORM\Column(name="quantity", type="array")
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
     * @var \stdClass
     *
     * @ORM\Column(name="payMethod", type="object")
     * @ORM\OneToOne(targetEntity="PayMethod", mappedBy="id")
     */
    private $payMethod;

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
     * @return UserOrder
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
     * @param array $article
     *
     * @return UserOrder
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
     * @return array
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
     * Set payMethod.
     *
     * @param \stdClass $payMethod
     *
     * @return UserOrder
     */
    public function setPayMethod($payMethod)
    {
        $this->payMethod = $payMethod;

        return $this;
    }

    /**
     * Get payMethod.
     *
     * @return \stdClass
     */
    public function getPayMethod()
    {
        return $this->payMethod;
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
     * Constructor
     */
    public function __construct()
    {
        $this->article = new \Doctrine\Common\Collections\ArrayCollection();
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
}
