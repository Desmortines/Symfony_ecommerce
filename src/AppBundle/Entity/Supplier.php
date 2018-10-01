<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Supplier
 *
 * @ORM\Table(name="supplier")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\SupplierRepository")
 */
class Supplier
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="adress", type="string", length=255)
     */
    private $adress;

    /**
     * @var Article
     *
     * @ORM\ManyToMany(targetEntity="Article", mappedBy="supplier")
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
     * @ORM\Column(name="mail", type="string", length=255)
     */
    private $mail;

    /**
     * @var Admin
     *
     * @ORM\ManyToOne(targetEntity="Admin", inversedBy="supplier")
     */
    private $admin;

    /**
     * @var SupplierOrder
     *
     * @ORM\ManyToOne(targetEntity="SupplierOrder", inversedBy="supplier")
     */
    private $order;


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
     * Set name.
     *
     * @param string $name
     *
     * @return Supplier
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set adress.
     *
     * @param string $adress
     *
     * @return Supplier
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
     * Set article.
     *
     * @param array $article
     *
     * @return Supplier
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
     * @return Supplier
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
     * Set mail.
     *
     * @param string $mail
     *
     * @return Supplier
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get mail.
     *
     * @return string
     */
    public function getMail()
    {
        return $this->mail;
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
     * @return Supplier
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
     * Set admin.
     *
     * @param \AppBundle\Entity\Admin|null $admin
     *
     * @return Supplier
     */
    public function setAdmin(\AppBundle\Entity\Admin $admin = null)
    {
        $this->admin = $admin;

        return $this;
    }

    /**
     * Get admin.
     *
     * @return \AppBundle\Entity\Admin|null
     */
    public function getAdmin()
    {
        return $this->admin;
    }

    /**
     * Set order.
     *
     * @param \AppBundle\Entity\SupplierOrder|null $order
     *
     * @return Supplier
     */
    public function setOrder(\AppBundle\Entity\SupplierOrder $order = null)
    {
        $this->order = $order;

        return $this;
    }

    /**
     * Get order.
     *
     * @return \AppBundle\Entity\SupplierOrder|null
     */
    public function getOrder()
    {
        return $this->order;
    }
}
