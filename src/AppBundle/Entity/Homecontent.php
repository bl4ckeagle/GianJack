<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Homecontent
 *
 * @ORM\Table(name="homecontent", indexes={@ORM\Index(name="id_idx", columns={"author_id"})})
 * @ORM\Entity
 */
class Homecontent
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=false)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="text", nullable=false)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text", nullable=false)
     */
    private $content;

    /**
     * @var string
     *
     * @ORM\Column(name="picture_path", type="text", nullable=false)
     */
    private $picturePath;

    /**
     * @var integer
     *
     * @ORM\Column(name="home_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $homeId;

    /**
     * @var \AppBundle\Entity\Contentuser
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Contentuser")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="author_id", referencedColumnName="content_user_id")
     * })
     */
    private $author;

    /**
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param \DateTime $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param string $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

    /**
     * @return string
     */
    public function getPicturePath()
    {
        return $this->picturePath;
    }

    /**
     * @param string $picturePath
     */
    public function setPicturePath($picturePath)
    {
        $this->picturePath = $picturePath;
    }

    /**
     * @return int
     */
    public function getHomeId()
    {
        return $this->homeId;
    }

    /**
     * @param int $homeId
     */
    public function setHomeId($homeId)
    {
        $this->homeId = $homeId;
    }

    /**
     * @return Contentuser
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param Contentuser $author
     */
    public function setAuthor($author)
    {
        $this->author = $author;
    }




}

