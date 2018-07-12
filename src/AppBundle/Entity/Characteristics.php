<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Characteristics
 *
 * @ORM\Table(name="characteristics")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CharacteristicsRepository")
 */
class Characteristics
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
     * @var Author
     *
     * @ORM\ManyToOne(targetEntity="Author", inversedBy="article")
     */
    private $author;

    /**
     * @var Editor
     *
     * @ORM\ManyToOne(targetEntity="Editor", inversedBy="article")
     */
    private $editor;

    /**
     * @var string
     *
     * @ORM\Column(name="synopsis", type="text")
     */
    private $synopsis;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="releaseDate", type="datetime")
     */
    private $releaseDate;

    /**
     * @var int|null
     *
     * @ORM\Column(name="volume", type="integer", nullable=true)
     */
    private $volume;

    /**
     * @var string
     *
     * @ORM\Column(name="format", type="string", length=255)
     */
    private $format;

    /**
     * @var string
     *
     * @ORM\Column(name="articleCondition", type="string", length=255)
     */
    private $articleCondition;

    /**
     * @var Article
     *
     * @ORM\OneToOne(targetEntity="Article",  mappedBy="characteristics")
     */
    private $article;


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
     * @return Characteristics
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
     * Set author.
     *
     * @param \stdClass $author
     *
     * @return Characteristics
     */
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get author.
     *
     * @return \stdClass
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set editor.
     *
     * @param \stdClass $editor
     *
     * @return Characteristics
     */
    public function setEditor($editor)
    {
        $this->editor = $editor;

        return $this;
    }

    /**
     * Get editor.
     *
     * @return \stdClass
     */
    public function getEditor()
    {
        return $this->editor;
    }

    /**
     * Set synopsis.
     *
     * @param string $synopsis
     *
     * @return Characteristics
     */
    public function setSynopsis($synopsis)
    {
        $this->synopsis = $synopsis;

        return $this;
    }

    /**
     * Get synopsis.
     *
     * @return string
     */
    public function getSynopsis()
    {
        return $this->synopsis;
    }

    /**
     * Set releaseDate.
     *
     * @param \DateTime $releaseDate
     *
     * @return Characteristics
     */
    public function setReleaseDate($releaseDate)
    {
        $this->releaseDate = $releaseDate;

        return $this;
    }

    /**
     * Get releaseDate.
     *
     * @return \DateTime
     */
    public function getReleaseDate()
    {
        return $this->releaseDate;
    }

    /**
     * Set volume.
     *
     * @param int|null $volume
     *
     * @return Characteristics
     */
    public function setVolume($volume = null)
    {
        $this->volume = $volume;

        return $this;
    }

    /**
     * Get volume.
     *
     * @return int|null
     */
    public function getVolume()
    {
        return $this->volume;
    }

    /**
     * Set format.
     *
     * @param string $format
     *
     * @return Characteristics
     */
    public function setFormat($format)
    {
        $this->format = $format;

        return $this;
    }

    /**
     * Get format.
     *
     * @return string
     */
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * Set isInStock.
     *
     * @param bool $isInStock
     *
     * @return Characteristics
     */
    public function setIsInStock($isInStock)
    {
        $this->isInStock = $isInStock;

        return $this;
    }

    /**
     * Get isInStock.
     *
     * @return bool
     */
    public function getIsInStock()
    {
        return $this->isInStock;
    }

    /**
     * Set articleCondition.
     *
     * @param string $articleCondition
     *
     * @return Characteristics
     */
    public function setArticleCondition($articleCondition)
    {
        $this->articleCondition = $articleCondition;

        return $this;
    }

    /**
     * Get articleCondition.
     *
     * @return string
     */
    public function getArticleCondition()
    {
        return $this->articleCondition;
    }

    /**
     * Set article.
     *
     * @param \AppBundle\Entity\Article|null $article
     *
     * @return Characteristics
     */
    public function setArticle(\AppBundle\Entity\Article $article = null)
    {
        $this->article = $article;

        return $this;
    }

    /**
     * Get article.
     *
     * @return \AppBundle\Entity\Article|null
     */
    public function getArticle()
    {
        return $this->article;
    }
}
