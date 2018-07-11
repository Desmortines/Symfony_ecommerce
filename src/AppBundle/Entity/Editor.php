<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Editor
 *
 * @ORM\Table(name="editor")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\EditorRepository")
 */
class Editor
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
     * @ORM\Column(name="books", type="array")
     * @ORM\OneToMany(targetEntity="Article", mappedBy="id")
     */
    private $books;


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
     * @return Editor
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
     * Set books.
     *
     * @param array $books
     *
     * @return Editor
     */
    public function setBooks($books)
    {
        $this->books = $books;

        return $this;
    }

    /**
     * Get books.
     *
     * @return array
     */
    public function getBooks()
    {
        return $this->books;
    }
}
