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
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    protected $name;

    /**
     * @var Characteristics
     *
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Characteristics",  mappedBy="article")
     */
    protected $characteristics;

    /**
     * @var float
     *
     * @ORM\Column(name="price", type="float")
     */
    protected $price;

    /**
     * @var Image[]
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Image", inversedBy="article", cascade={"ALL"})
     */
    protected $images;

    /**
     * @var string
     *
     * @ORM\Column(name="isbnReference", type="string", length=255)
     */
    protected $isbnReference;

    /**
     * @var Category
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Category", inversedBy="article")
     */
    protected $category;

    /**
     * @var int
     *
     * @ORM\Column(name="stock", type="integer")
     */
    protected $stock;

    /**
     * @var Genre[]
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Genre", inversedBy="article", cascade={"ALL"})
     */
    protected $genres;

    /**
     * @var int
     *
     * @ORM\Column(name="totalBought", type="integer", nullable=true)
     */
    protected $totalBought;

    /**
     * @var int
     *
     * @ORM\Column(name="nbrClicked", type="integer", nullable=true)
     */
    protected $nbrClicked;

    /**
     * @var Supplier
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Supplier", inversedBy="article")
     */
    protected $supplier;

    /**
     * @var Rating
     *
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Rating", mappedBy="article")
     */
    protected $rating;

    /**
     * @var UserOrder
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\UserOrder", inversedBy="article")
     */
    protected $userOrder;

    /**
     * @var Cart
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Cart", inversedBy="article")
     */
    protected $cart;

    /**
     * @var SupplierOrder
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\SupplierOrder", inversedBy="article")
     */
    protected $supplierOrder;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->images = new \Doctrine\Common\Collections\ArrayCollection();
        $this->genres = new \Doctrine\Common\Collections\ArrayCollection();
        $this->supplier = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * Set totalBought.
     *
     * @param int|null $totalBought
     *
     * @return Article
     */
    public function setTotalBought($totalBought = null)
    {
        $this->totalBought = $totalBought;

        return $this;
    }

    /**
     * Get totalBought.
     *
     * @return int|null
     */
    public function getTotalBought()
    {
        return $this->totalBought;
    }

    /**
     * Set nbrClicked.
     *
     * @param int|null $nbrClicked
     *
     * @return Article
     */
    public function setNbrClicked($nbrClicked = null)
    {
        $this->nbrClicked = $nbrClicked;

        return $this;
    }

    /**
     * Get nbrClicked.
     *
     * @return int|null
     */
    public function getNbrClicked()
    {
        return $this->nbrClicked;
    }

    /**
     * Set characteristics.
     *
     * @param \AppBundle\Entity\Characteristics|null $characteristics
     *
     * @return Article
     */
    public function setCharacteristics(\AppBundle\Entity\Characteristics $characteristics = null)
    {
        $this->characteristics = $characteristics;

        return $this;
    }

    /**
     * Get characteristics.
     *
     * @return \AppBundle\Entity\Characteristics|null
     */
    public function getCharacteristics()
    {
        return $this->characteristics;
    }

    /**
     * Add image.
     *
     * @param \AppBundle\Entity\Image $image
     *
     * @return Article
     */
    public function addImage(\AppBundle\Entity\Image $image)
    {
        $this->images[] = $image;

        return $this;
    }

    /**
     * Remove image.
     *
     * @param \AppBundle\Entity\Image $image
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeImage(\AppBundle\Entity\Image $image)
    {
        return $this->images->removeElement($image);
    }

    /**
     * Get images.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * Set category.
     *
     * @param \AppBundle\Entity\Category|null $category
     *
     * @return Article
     */
    public function setCategory(\AppBundle\Entity\Category $category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category.
     *
     * @return \AppBundle\Entity\Category|null
     */
    public function getCategory()
    {
        return $this->category;
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
        $this->genres[] = $genre;

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
        return $this->genres->removeElement($genre);
    }

    /**
     * Get genres.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getGenres()
    {
        return $this->genres;
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
