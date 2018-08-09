<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Article
 *
 * @ORM\Table(name="article")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ArticleRepository")
 */
class Article
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
     * @var Characteristics
     *
     * @ORM\OneToOne(targetEntity="Characteristics",  mappedBy="article")
     */
    private $characteristics;

    /**
     * @var float
     *
     * @ORM\Column(name="price", type="float")
     */
    private $price;

    /**
     * @var array
     *
     * @ORM\Column(name="image", type="array")
     */
    private $image;

    /**
     * @var string
     *
     * @ORM\Column(name="isbnReference", type="string", length=255)
     */
    private $isbnReference;

    /**
     * @var Category
     *
     * @ORM\OneToOne(targetEntity="Category", mappedBy="article")
     */
    private $category;

    /**
     * @var int
     *
     * @ORM\Column(name="stock", type="integer")
     */
    private $stock;

    /**
     * @var Genre
     *
     * @ORM\OneToMany(targetEntity="Genre", mappedBy="article")
     */
    private $genre;

    /**
     * @var int
     *
     * @ORM\Column(name="totalBought", type="integer", nullable=true)
     */
    private $totalBought;

    /**
     * @var int
     *
     * @ORM\Column(name="nbrClicked", type="integer", nullable=true)
     */
    private $nbrClicked;

    /**
     * @var Supplier
     *
     * @ORM\ManyToMany(targetEntity="Supplier", inversedBy="article")
     */
    private $supplier;

    /**
     * @var Rating
     *
     * @ORM\OneToOne(targetEntity="Rating", mappedBy="article")
     */
    private $rating;

    /**
     * @var UserOrder
     *
     * @ORM\ManyToOne(targetEntity="UserOrder", inversedBy="article")
     */
    private $userOrder;

    /**
     * @var Cart
     *
     * @ORM\ManyToOne(targetEntity="Cart", inversedBy="article")
     */
    private $cart;

    /**
     * @var SupplierOrder
     *
     * @ORM\ManyToOne(targetEntity="SupplierOrder", inversedBy="article")
     */
    private $supplierOrder;


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
     * @return Article
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
     * Set characteristics.
     *
     * @param array $characteristics
     *
     * @return Article
     */
    public function setCharacteristics($characteristics)
    {
        $this->characteristics = $characteristics;

        return $this;
    }

    /**
     * Get characteristics.
     *
     * @return array
     */
    public function getCharacteristics()
    {
        return $this->characteristics;
    }

    /**
     * Set price.
     *
     * @param float $price
     *
     * @return Article
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
     * Set image.
     *
     * @param array $image
     *
     * @return Article
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image.
     *
     * @return array
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set isbnReference.
     *
     * @param string $isbnReference
     *
     * @return Article
     */
    public function setIsbnReference($isbnReference)
    {
        $this->isbnReference = $isbnReference;

        return $this;
    }

    /**
     * Get isbnReference.
     *
     * @return string
     */
    public function getIsbnReference()
    {
        return $this->isbnReference;
    }

    /**
     * Set category.
     *
     * @param int $category
     *
     * @return Article
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category.
     *
     * @return int
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set stock.
     *
     * @param int $stock
     *
     * @return Article
     */
    public function setStock($stock)
    {
        $this->stock = $stock;

        return $this;
    }

    /**
     * Get stock.
     *
     * @return int
     */
    public function getStock()
    {
        return $this->stock;
    }

    /**
     * Set genre.
     *
     * @param int $genre
     *
     * @return Article
     */
    public function setGenre($genre)
    {
        $this->genre = $genre;

        return $this;
    }

    /**
     * Get genre.
     *
     * @return int
     */
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * Set totalBought.
     *
     * @param int $totalBought
     *
     * @return Article
     */
    public function setTotalBought($totalBought)
    {
        $this->totalBought = $totalBought;

        return $this;
    }

    /**
     * Get totalBought.
     *
     * @return int
     */
    public function getTotalBought()
    {
        return $this->totalBought;
    }

    /**
     * Set nbrClicked.
     *
     * @param int $nbrClicked
     *
     * @return Article
     */
    public function setNbrClicked($nbrClicked)
    {
        $this->nbrClicked = $nbrClicked;

        return $this;
    }

    /**
     * Get nbrClicked.
     *
     * @return int
     */
    public function getNbrClicked()
    {
        return $this->nbrClicked;
    }

    /**
     * Add genre.
     *
     * @param \AppBundle\Entity\Genre $genre
     *
     * @return Article
     */
    public function addGenre(\AppBundle\Entity\Genre $genre)
    {
        $this->genre[] = $genre;

        return $this;
    }

    /**
     * Remove genre.
     *
     * @param \AppBundle\Entity\Genre $genre
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeGenre(\AppBundle\Entity\Genre $genre)
    {
        return $this->genre->removeElement($genre);
    }

    /**
     * Add supplier.
     *
     * @param \AppBundle\Entity\Supplier $supplier
     *
     * @return Article
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
     * Get supplier.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSupplier()
    {
        return $this->supplier;
    }

    /**
     * Set userOrder.
     *
     * @param \AppBundle\Entity\UserOrder|null $userOrder
     *
     * @return Article
     */
    public function setUserOrder(\AppBundle\Entity\UserOrder $userOrder = null)
    {
        $this->userOrder = $userOrder;

        return $this;
    }

    /**
     * Get userOrder.
     *
     * @return \AppBundle\Entity\UserOrder|null
     */
    public function getUserOrder()
    {
        return $this->userOrder;
    }

    /**
     * Set cart.
     *
     * @param \AppBundle\Entity\Cart|null $cart
     *
     * @return Article
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
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->genre = new \Doctrine\Common\Collections\ArrayCollection();
        $this->supplier = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set supplierOrder.
     *
     * @param \AppBundle\Entity\SupplierOrder|null $supplierOrder
     *
     * @return Article
     */
    public function setSupplierOrder(\AppBundle\Entity\SupplierOrder $supplierOrder = null)
    {
        $this->supplierOrder = $supplierOrder;

        return $this;
    }

    /**
     * Get supplierOrder.
     *
     * @return \AppBundle\Entity\SupplierOrder|null
     */
    public function getSupplierOrder()
    {
        return $this->supplierOrder;
    }
}
