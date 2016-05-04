<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Homecontent
 *
 * @ORM\Table(name="homecontent", indexes={@ORM\Index(name="id_idx", columns={"author_id"})})
 * @ORM\Entity()
 */
class Homecontent
{
    /**
     * @var integer
     *
     * @ORM\Column(name="home_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $homeId;

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
     * @var \Contentuser
     *
     * @ORM\ManyToOne(targetEntity="Contentuser")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="author_id", referencedColumnName="content_user_id")
     * })
     */
    private $author;



    /**
     * Get homeId
     *
     * @return integer
     */
    public function getHomeId()
    {
        return $this->homeId;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Homecontent
     */
    public function setDate($date)
    {
        $this->date = $date;
    
        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Homecontent
     */
    public function setTitle($title)
    {
        $this->title = $title;
    
        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set content
     *
     * @param string $content
     *
     * @return Homecontent
     */
    public function setContent($content)
    {
        $this->content = $content;
    
        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set picturePath
     *
     * @param string $picturePath
     *
     * @return Homecontent
     */
    public function setPicturePath($picturePath)
    {
        $this->picturePath = $picturePath;
    
        return $this;
    }

    /**
     * Get picturePath
     *
     * @return string
     */
    public function getPicturePath()
    {
        return $this->picturePath;
    }

    /**
     * Set author
     *
     * @param \AppBundle\Entity\Contentuser $author
     *
     * @return Homecontent
     */
    public function setAuthor(\AppBundle\Entity\Contentuser $author = null)
    {
        $this->author = $author;
    
        return $this;
    }

    /**
     * Get author
     *
     * @return \AppBundle\Entity\Contentuser
     */
    public function getAuthor()
    {
        return $this->author;
    }
}
