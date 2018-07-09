<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Admin
 *
 * @ORM\Table(name="admin")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AdminRepository")
 */
class Admin
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
     * @ORM\Column(name="payMethod", type="array")
     */
    private $payMethod;

    /**
     * @var array
     *
     * @ORM\Column(name="supplier", type="array")
     * @ORM\OneToMany(targetEntity="Supplier", mappedBy="id")
     */
    private $supplier;

    /**
     * @var array
     *
     * @ORM\Column(name="stockWarning", type="array")
     */
    private $stockWarning;

    /**
     * @var array
     *
     * @ORM\Column(name="userOrderPending", type="array")
     * @ORM\OneToMany(targetEntity="UserOrder", mappedBy="id")
     */
    private $userOrderPending;

    /**
     * @var array
     *
     * @ORM\Column(name="userOrderComplete", type="array")
     * @ORM\OneToMany(targetEntity="UserOrder", mappedBy="id")
     */
    private $userOrderComplete;

    /**
     * @var array
     *
     * @ORM\Column(name="supplierOrderPending", type="array")
     * @ORM\OneToMany(targetEntity="SupplieOrder", mappedBy="id")
     */
    private $supplierOrderPending;

    /**
     * @var array
     *
     * @ORM\Column(name="supplierOrderComplete", type="array")
     * @ORM\OneToMany(targetEntity="SupplierOrder", mappedBy="id")
     */
    private $supplierOrderComplete;

    /**
     * @var float
     *
     * @ORM\Column(name="netMargin", type="float")
     */
    private $netMargin;


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
     * Set payMethod.
     *
     * @param array $payMethod
     *
     * @return Admin
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
     * Set supplier.
     *
     * @param array $supplier
     *
     * @return Admin
     */
    public function setSupplier($supplier)
    {
        $this->supplier = $supplier;

        return $this;
    }

    /**
     * Get supplier.
     *
     * @return array
     */
    public function getSupplier()
    {
        return $this->supplier;
    }

    /**
     * Set stockWarning.
     *
     * @param array $stockWarning
     *
     * @return Admin
     */
    public function setStockWarning($stockWarning)
    {
        $this->stockWarning = $stockWarning;

        return $this;
    }

    /**
     * Get stockWarning.
     *
     * @return array
     */
    public function getStockWarning()
    {
        return $this->stockWarning;
    }

    /**
     * Set userOrderPending.
     *
     * @param array $userOrderPending
     *
     * @return Admin
     */
    public function setUserOrderPending($userOrderPending)
    {
        $this->userOrderPending = $userOrderPending;

        return $this;
    }

    /**
     * Get userOrderPending.
     *
     * @return array
     */
    public function getUserOrderPending()
    {
        return $this->userOrderPending;
    }

    /**
     * Set userOrderComplete.
     *
     * @param array $userOrderComplete
     *
     * @return Admin
     */
    public function setUserOrderComplete($userOrderComplete)
    {
        $this->userOrderComplete = $userOrderComplete;

        return $this;
    }

    /**
     * Get userOrderComplete.
     *
     * @return array
     */
    public function getUserOrderComplete()
    {
        return $this->userOrderComplete;
    }

    /**
     * Set supplierOrderPending.
     *
     * @param array $supplierOrderPending
     *
     * @return Admin
     */
    public function setSupplierOrderPendingr($supplierOrderPending)
    {
        $this->supplierOrderPending = $supplierOrderPending;

        return $this;
    }

    /**
     * Get supplierOrderPending.
     *
     * @return array
     */
    public function getSupplierOrderPending()
    {
        return $this->supplierOrderPending;
    }

    /**
     * Set supplierOrderComplete.
     *
     * @param array $supplierOrderComplete
     *
     * @return Admin
     */
    public function setSupplierOrderComplete($supplierOrderComplete)
    {
        $this->supplierOrderComplete = $supplierOrderComplete;

        return $this;
    }

    /**
     * Get supplierOrderComplete.
     *
     * @return array
     */
    public function getSupplierOrderComplete()
    {
        return $this->supplierOrderComplete;
    }

    /**
     * Set netMargin.
     *
     * @param float $netMargin
     *
     * @return Admin
     */
    public function setNetMargin($netMargin)
    {
        $this->netMargin = $netMargin;

        return $this;
    }

    /**
     * Get netMargin.
     *
     * @return float
     */
    public function getNetMargin()
    {
        return $this->netMargin;
    }
}
