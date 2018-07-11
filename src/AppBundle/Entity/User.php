<?php

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UserRepository")
 */
class User extends BaseUser
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

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
     * @ORM\Column(name="adress", type="string", length=255)
     */
    private $adress;


    /**
     * @var array|null
     *
     * @ORM\Column(name="order", type="array", nullable=true)
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\UserOrder", mappedBy="user")
     */
    private $order;

    /**
     * @var array
     *
     * @ORM\Column(name="payMethod", type="array")
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Payment", mappedBy="user")
     */
    private $payMethod;

    /**
     * @var bool
     *
     * @ORM\Column(name="type", type="boolean")
     */
    private $type;

    /**
     * @var array|null
     *
     * @ORM\Column(name="marks", type="array", nullable=true)
     */
    private $marks;

    /**
     * @var array|null
     *
     * @ORM\Column(name="comments", type="array", nullable=true)
     */
    private $comments;

    /**
     * @var string
     *
     * @ORM\Column(name="theme", type="string", length=255)
     */
    private $theme;

    /**
     * @var bool
     *
     * @ORM\Column(name="isActive", type="boolean")
     */
    private $isActive;

    /**
     * @var array|null
     *
     * @ORM\Column(name="favorites", type="array", nullable=true)
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Favs", mappedBy="user")
     */
    private $favorites;

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Set firstName.
     *
     * @param string $firstName
     *
     * @return User
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
     * @return User
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
     * Set adress.
     *
     * @param string $adress
     *
     * @return User
     */
    public function setAdress($adress)
    {
        $this->adress = $adress;

        return $this;
    }

    /**
     * Get adress.
     *
     * @return string
     */
    public function getAdress()
    {
        return $this->adress;
    }

    /**
     * Set order.
     *
     * @param array|null $order
     *
     * @return User
     */
    public function setOrder($order = null)
    {
        $this->order = $order;

        return $this;
    }

    /**
     * Get order.
     *
     * @return array|null
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * Set payMethod.
     *
     * @param array $payMethod
     *
     * @return User
     */
    public function setPayMethod($payMethod)
    {
        $this->payMethod = $payMethod;

        return $this;
    }

    /**
     * Get payMethod.
     *
     * @return array
     */
    public function getPayMethod()
    {
        return $this->payMethod;
    }

    /**
     * Set type.
     *
     * @param bool $type
     *
     * @return User
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type.
     *
     * @return bool
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set marks.
     *
     * @param array|null $marks
     *
     * @return User
     */
    public function setMarks($marks = null)
    {
        $this->marks = $marks;

        return $this;
    }

    /**
     * Get marks.
     *
     * @return array|null
     */
    public function getMarks()
    {
        return $this->marks;
    }

    /**
     * Set comments.
     *
     * @param array|null $comments
     *
     * @return User
     */
    public function setComments($comments = null)
    {
        $this->comments = $comments;

        return $this;
    }

    /**
     * Get comments.
     *
     * @return array|null
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Set theme.
     *
     * @param string $theme
     *
     * @return User
     */
    public function setTheme($theme)
    {
        $this->theme = $theme;

        return $this;
    }

    /**
     * Get theme.
     *
     * @return string
     */
    public function getTheme()
    {
        return $this->theme;
    }

    /**
     * Set isActive.
     *
     * @param bool $isActive
     *
     * @return User
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * Get isActive.
     *
     * @return bool
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * Set favorites.
     *
     * @param array|null $favorites
     *
     * @return User
     */
    public function setFavorites($favorites = null)
    {
        $this->favorites = $favorites;

        return $this;
    }

    /**
     * Get favorites.
     *
     * @return array|null
     */
    public function getFavorites()
    {
        return $this->favorites;
    }
}
