<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Biographyband
 *
 * @ORM\Table(name="biographyband")
 * @ORM\Entity
 */
class Biographyband
{
    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text", nullable=false)
     */
    private $content;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=100, nullable=false)
     */
    private $title;

    /**
     * @var integer
     *
     * @ORM\Column(name="biography_band_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $biographyBandId;

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
    public function getBiographyBandId()
    {
        return $this->biographyBandId;
    }

    /**
     * @param int $biographyBandId
     */
    public function setBiographyBandId($biographyBandId)
    {
        $this->biographyBandId = $biographyBandId;
    }




}

