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
     * @var Cart
     *
     * @ORM\OneToMany(targetEntity="Cart", mappedBy="user")
     */
    protected $cart;

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Add cart.
     *
     * @param \AppBundle\Entity\Cart $cart
     *
     * @return User
     */
    public function addCart(\AppBundle\Entity\Cart $cart)
    {
        $this->cart[] = $cart;

        return $this;
    }

    /**
     * Remove cart.
     *
     * @param \AppBundle\Entity\Cart $cart
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeCart(\AppBundle\Entity\Cart $cart)
    {
        return $this->cart->removeElement($cart);
    }

    /**
     * Get cart.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCart()
    {
        return $this->cart;
    }
}
