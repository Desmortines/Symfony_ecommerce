<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comments
 *
 * @ORM\Table(name="comments")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CommentsRepository")
 */
class Comments
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
     * @var int
     *
     * @ORM\Column(name="user", type="integer")
     * @ORM\OneToMany(targetEntity="User", mappedBy="id")
     */
    private $user;

    /**
     * @var string
     *
     * @ORM\Column(name="commentText", type="text")
     */
    private $commentText;

    /**
     * @var int|null
     *
     * @ORM\Column(name="isAnswerTo", type="integer", nullable=true)
     */
    private $isAnswerTo;


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
     * Set user.
     *
     * @param int $user
     *
     * @return Comments
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user.
     *
     * @return int
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set commentText.
     *
     * @param string $commentText
     *
     * @return Comments
     */
    public function setCommentText($commentText)
    {
        $this->commentText = $commentText;

        return $this;
    }

    /**
     * Get commentText.
     *
     * @return string
     */
    public function getCommentText()
    {
        return $this->commentText;
    }

    /**
     * Set isAnswerTo.
     *
     * @param int|null $isAnswerTo
     *
     * @return Comments
     */
    public function setIsAnswerTo($isAnswerTo = null)
    {
        $this->isAnswerTo = $isAnswerTo;

        return $this;
    }

    /**
     * Get isAnswerTo.
     *
     * @return int|null
     */
    public function getIsAnswerTo()
    {
        return $this->isAnswerTo;
    }
}
