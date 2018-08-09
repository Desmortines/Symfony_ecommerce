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
     * @var Article
     *
     * @ORM\OneToMany(targetEntity="Article", mappedBy="supplierOrder")
     */
    private $article;

    /**
     * @var array
     *
     * @ORM\Column(name="quantity", type="array")
     */
    private $quantity;

    /**
     * @var Supplier
     *
     * @ORM\OneToMany(targetEntity="Supplier", mappedBy="order")
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
     * @var Admin
     *
     * @ORM\ManyToOne(targetEntity="Admin", inversedBy="supplierOrderPending")
     */
    private $supplierOrderPending;

    /**
     * @var Admin
     *
     * @ORM\ManyToOne(targetEntity="Admin", inversedBy="supplierOrderComplete")
     */
    private $supplierOrderComplete;


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
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->article = new \Doctrine\Common\Collections\ArrayCollection();
        $this->supplier = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add article.
     *
     * @param \AppBundle\Entity\Article $article
     *
     * @return SupplierOrder
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
     * Add supplier.
     *
     * @param \AppBundle\Entity\Supplier $supplier
     *
     * @return SupplierOrder
     */
    public function addSupplier(\AppBundle\Entity\Supplier $supplier)
    {
        $this->supplier[] = $supplier;

        return $this;
    }

    /**
     * Remove supplier.
     *
     * @param \AppBundle\Entity\Supplier $supplier
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeSupplier(\AppBundle\Entity\Supplier $supplier)
    {
        return $this->supplier->removeElement($supplier);
    }

    /**
     * Set supplierOrderPending.
     *
     * @param \AppBundle\Entity\Admin|null $supplierOrderPending
     *
     * @return SupplierOrder
     */
    public function setSupplierOrderPending(\AppBundle\Entity\Admin $supplierOrderPending = null)
    {
        $this->supplierOrderPending = $supplierOrderPending;

        return $this;
    }

    /**
     * Get supplierOrderPending.
     *
     * @return \AppBundle\Entity\Admin|null
     */
    public function getSupplierOrderPending()
    {
        return $this->supplierOrderPending;
    }

    /**
     * Set supplierOrderComplete.
     *
     * @param \AppBundle\Entity\Admin|null $supplierOrderComplete
     *
     * @return SupplierOrder
     */
    public function setSupplierOrderComplete(\AppBundle\Entity\Admin $supplierOrderComplete = null)
    {
        $this->supplierOrderComplete = $supplierOrderComplete;

        return $this;
    }

    /**
     * Get supplierOrderComplete.
     *
     * @return \AppBundle\Entity\Admin|null
     */
    public function getSupplierOrderComplete()
    {
        return $this->supplierOrderComplete;
    }
}
