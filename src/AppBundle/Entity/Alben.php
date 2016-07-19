<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Alben
 *
 * @ORM\Table(name="alben")
 * @ORM\Entity
 */
class Alben
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="text", nullable=false)
     */
    private $name;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="releasedate", type="date", nullable=false)
     */
    private $releasedate;

    /**
     * @var string
     *
     * @ORM\Column(name="picturepath", type="text", nullable=false)
     */
    private $picturepath;

    /**
     * @var integer
     *
     * @ORM\Column(name="alben_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $albenId;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return \DateTime
     */
    public function getReleasedate()
    {
        return $this->releasedate;
    }

    /**
     * @param \DateTime $releasedate
     */
    public function setReleasedate($releasedate)
    {
        $this->releasedate = $releasedate;
    }

    /**
     * @return string
     */
    public function getPicturepath()
    {
        return $this->picturepath;
    }

    /**
     * @param string $picturepath
     */
    public function setPicturepath($picturepath)
    {
        $this->picturepath = $picturepath;
    }

    /**
     * @return int
     */
    public function getAlbenId()
    {
        return $this->albenId;
    }

    /**
     * @param int $albenId
     */
    public function setAlbenId($albenId)
    {
        $this->albenId = $albenId;
    }




}

