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
     * @var User
     *
     * @ORM\ManyToOne(targetEntity="User", inversedBy="comments")
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
     * @var Rating
     *
     * @ORM\ManyToOne(targetEntity="Rating", inversedBy="linkedComment")
     */
    private $rating;


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

    /**
     * Set rating.
     *
     * @param \AppBundle\Entity\Rating|null $rating
     *
     * @return Comments
     */
    public function setRating(\AppBundle\Entity\Rating $rating = null)
    {
        $this->rating = $rating;

        return $this;
    }

    /**
     * Get rating.
     *
     * @return \AppBundle\Entity\Rating|null
     */
    public function getRating()
    {
        return $this->rating;
    }
}
