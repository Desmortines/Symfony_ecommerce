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
     * @var array
     *
     * @ORM\Column(name="article", type="array")
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
     * @ORM\Column(name="mail", type="string", length=255)
     */
    private $mail;


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
}
