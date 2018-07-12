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
     * @var Supplier
     *
     * @ORM\OneToMany(targetEntity="Supplier", mappedBy="admin")
     */
    private $supplier;

    /**
     * @var array
     *
     * @ORM\Column(name="stockWarning", type="array")
     */
    private $stockWarning;

    /**
     * @var UserOrder
     *
     * @ORM\OneToMany(targetEntity="UserOrder", mappedBy="userOrderPending")
     */
    private $userOrderPending;

    /**
     * @var UserOrder
     *
     * @ORM\OneToMany(targetEntity="UserOrder", mappedBy="userOrderComplete")
     */
    private $userOrderComplete;

    /**
     * @var SupplierOrder
     *
     * @ORM\OneToMany(targetEntity="SupplierOrder", mappedBy="supplierOrderPending")
     */
    private $supplierOrderPending;

    /**
     * @var SupplierOrder
     *
     * @ORM\OneToMany(targetEntity="SupplierOrder", mappedBy="supplierOrderComplete")
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

    /**
     * Set supplierOrderPending.
     *
     * @param array $supplierOrderPending
     *
     * @return Admin
     */
    public function setSupplierOrderPending($supplierOrderPending)
    {
        $this->supplierOrderPending = $supplierOrderPending;

        return $this;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->supplier = new \Doctrine\Common\Collections\ArrayCollection();
        $this->userOrderPending = new \Doctrine\Common\Collections\ArrayCollection();
        $this->userOrderComplete = new \Doctrine\Common\Collections\ArrayCollection();
        $this->supplierOrderPending = new \Doctrine\Common\Collections\ArrayCollection();
        $this->supplierOrderComplete = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add supplier.
     *
     * @param \AppBundle\Entity\Supplier $supplier
     *
     * @return Admin
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
     * Add userOrderPending.
     *
     * @param \AppBundle\Entity\UserOrder $userOrderPending
     *
     * @return Admin
     */
    public function addUserOrderPending(\AppBundle\Entity\UserOrder $userOrderPending)
    {
        $this->userOrderPending[] = $userOrderPending;

        return $this;
    }

    /**
     * Remove userOrderPending.
     *
     * @param \AppBundle\Entity\UserOrder $userOrderPending
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeUserOrderPending(\AppBundle\Entity\UserOrder $userOrderPending)
    {
        return $this->userOrderPending->removeElement($userOrderPending);
    }

    /**
     * Add userOrderComplete.
     *
     * @param \AppBundle\Entity\UserOrder $userOrderComplete
     *
     * @return Admin
     */
    public function addUserOrderComplete(\AppBundle\Entity\UserOrder $userOrderComplete)
    {
        $this->userOrderComplete[] = $userOrderComplete;

        return $this;
    }

    /**
     * Remove userOrderComplete.
     *
     * @param \AppBundle\Entity\UserOrder $userOrderComplete
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeUserOrderComplete(\AppBundle\Entity\UserOrder $userOrderComplete)
    {
        return $this->userOrderComplete->removeElement($userOrderComplete);
    }

    /**
     * Add supplierOrderPending.
     *
     * @param \AppBundle\Entity\SupplierOrder $supplierOrderPending
     *
     * @return Admin
     */
    public function addSupplierOrderPending(\AppBundle\Entity\SupplierOrder $supplierOrderPending)
    {
        $this->supplierOrderPending[] = $supplierOrderPending;

        return $this;
    }

    /**
     * Remove supplierOrderPending.
     *
     * @param \AppBundle\Entity\SupplierOrder $supplierOrderPending
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeSupplierOrderPending(\AppBundle\Entity\SupplierOrder $supplierOrderPending)
    {
        return $this->supplierOrderPending->removeElement($supplierOrderPending);
    }

    /**
     * Add supplierOrderComplete.
     *
     * @param \AppBundle\Entity\SupplierOrder $supplierOrderComplete
     *
     * @return Admin
     */
    public function addSupplierOrderComplete(\AppBundle\Entity\SupplierOrder $supplierOrderComplete)
    {
        $this->supplierOrderComplete[] = $supplierOrderComplete;

        return $this;
    }

    /**
     * Remove supplierOrderComplete.
     *
     * @param \AppBundle\Entity\SupplierOrder $supplierOrderComplete
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeSupplierOrderComplete(\AppBundle\Entity\SupplierOrder $supplierOrderComplete)
    {
        return $this->supplierOrderComplete->removeElement($supplierOrderComplete);
    }
}
