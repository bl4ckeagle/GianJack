<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Video
 *
 * @ORM\Table(name="video", indexes={@ORM\Index(name="IDX_7CC7DA2C39986E43", columns={"album"})})
 * @ORM\Entity(repositoryClass="AppBundle\Entity\VideoRepo")
 */
class Video
{
    /**
     * @var string
     *
     * @ORM\Column(name="link", type="text", nullable=false)
     */
    private $link;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="text", nullable=false)
     */
    private $title;

    /**
     * @var integer
     *
     * @ORM\Column(name="video_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $videoId;

    /**
     * @var \AppBundle\Entity\Album
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Album")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="album", referencedColumnName="alben_id")
     * })
     */
    private $album;

    /**
     * @return string
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * @param string $link
     */
    public function setLink($link)
    {
        $this->link = $link;
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
     * @return int
     */
    public function getVideoId()
    {
        return $this->videoId;
    }

    /**
     * @param int $videoId
     */
    public function setVideoId($videoId)
    {
        $this->videoId = $videoId;
    }

    /**
     * @return Album
     */
    public function getAlbum()
    {
        return $this->album;
    }

    /**
     * @param Album $album
     */
    public function setAlbum($album)
    {
        $this->album = $album;
    }




}
