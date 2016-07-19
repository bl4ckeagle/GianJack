<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * 
 *
 * @ORM\Table(name="alben")
 * @ORM\Entity()
 */
class Album
{
    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=false,name="alben_id")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $albenID;

    /**
     * @var string
     *
     * @ORM\Column(type="text", nullable=false)
     */
    private $name;


    /**
     * @var string
     * @ORM\Column(type="date", nullable=false)
     */
    private $releasedate;


    /**
     * @var string
     * @ORM\Column(type="text",nullable=false)
     *
     */
    private $picturepath;




    /**
     * Get albenID
     *
     * @return integer
     */




    public function getAlbenID()
    {
        return $this->albenID;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Album
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
     * Set release
     *
     * @param \DateTime $releasedate
     *
     * @return Album
     */
    public function setReleasedate($releasedate)
    {
        $this->releasedate = $releasedate;

        return $this;
    }

    /**
     * Get release
     *
     * @return \DateTime
     */
    public function getReleasedate()
    {
        return $this->releasedate;
    }
    /**
     * Set picturepath
     *
     * @param string $picturepath
     *
     * @return Album
     */
    public function setPicturepath($picturepath)
    {
        $this->picturepath = $picturepath;

        return $this;
    }

    /**
     * Get picturepath
     *
     * @return string
     */
    public function getPicturepath()
    {
        return $this->picturepath;
    }
}
