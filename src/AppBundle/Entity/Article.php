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
     * @var array
     *
     * @ORM\Column(name="characteristics", type="array")
     * @ORM\OneToMany(targetEntity="Characteristics",  mappedBy="id")
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
     * @var int
     *
     * @ORM\Column(name="category", type="integer")
     * @ORM\OneToOne(targetEntity="Category",  mappedBy="id")
     */
    private $category;

    /**
     * @var int
     *
     * @ORM\Column(name="stock", type="integer")
     */
    private $stock;

    /**
     * @var int
     *
     * @ORM\Column(name="genre", type="integer")
     * @ORM\OneToMany(targetEntity="Genre",  mappedBy="id")
     */
    private $genre;

    /**
     * @var int
     *
     * @ORM\Column(name="totalBought", type="integer")
     */
    private $totalBought;

    /**
     * @var int
     *
     * @ORM\Column(name="nbrClicked", type="integer")
     */
    private $nbrClicked;


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
}
