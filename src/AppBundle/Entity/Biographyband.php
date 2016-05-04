<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Biographyband
 *
 * @ORM\Table(name="biographyband")
 * @ORM\Entity()
 */
class Biographyband
{
    /**
     * @var integer
     *
     * @ORM\Column(name="biography_band_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $biographyBandId;

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
     * Get biographyBandId
     *
     * @return integer
     */
    public function getBiographyBandId()
    {
        return $this->biographyBandId;
    }

    /**
     * Set content
     *
     * @param string $content
     *
     * @return Biographyband
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
     * Set title
     *
     * @param string $title
     *
     * @return Biographyband
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
}
