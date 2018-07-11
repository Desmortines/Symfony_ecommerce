<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SupplierOrder
 *
 * @ORM\Table(name="supplier_order")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\SupplierOrderRepository")
 */
class SupplierOrder
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
     * @var int
     *
     * @ORM\Column(name="supplier", type="integer")
     * @ORM\OneToMany(targetEntity="Supplier", mappedBy="id")
     */
    private $supplier;

    /**
     * @var bool
     *
     * @ORM\Column(name="payment", type="boolean")
     */
    private $payment;

    /**
     * @var float
     *
     * @ORM\Column(name="price", type="float")
     */
    private $price;


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
     * @return SupplierOrder
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
     * @return SupplierOrder
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
     * Set supplier.
     *
     * @param int $supplier
     *
     * @return SupplierOrder
     */
    public function setSupplier($supplier)
    {
        $this->supplier = $supplier;

        return $this;
    }

    /**
     * Get supplier.
     *
     * @return int
     */
    public function getSupplier()
    {
        return $this->supplier;
    }

    /**
     * Set payment.
     *
     * @param bool $payment
     *
     * @return SupplierOrder
     */
    public function setPayment($payment)
    {
        $this->payment = $payment;

        return $this;
    }

    /**
     * Get payment.
     *
     * @return bool
     */
    public function getPayment()
    {
        return $this->payment;
    }

    /**
     * Set price.
     *
     * @param float $price
     *
     * @return SupplierOrder
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price.
     *
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }
}
