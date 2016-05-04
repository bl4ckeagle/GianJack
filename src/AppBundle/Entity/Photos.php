<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Photos
 *
 * @ORM\Table(name="photos")
 * @ORM\Entity()
 */
class Photos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="photos_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $photosId;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="text", nullable=false)
     */
    private $name;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="year", type="datetime", nullable=false)
     */
    private $year;

    /**
     * @var string
     *
     * @ORM\Column(name="location", type="text", nullable=false)
     */
    private $location;



    /**
     * Get photosId
     *
     * @return integer
     */
    public function getPhotosId()
    {
        return $this->photosId;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Photos
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set year
     *
     * @param \DateTime $year
     *
     * @return Photos
     */
    public function setYear($year)
    {
        $this->year = $year;
    
        return $this;
    }

    /**
     * Get year
     *
     * @return \DateTime
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * Set location
     *
     * @param string $location
     *
     * @return Photos
     */
    public function setLocation($location)
    {
        $this->location = $location;
    
        return $this;
    }

    /**
     * Get location
     *
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }
}
