<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Biographyband
 *
 * @ORM\Table(name="alben")
 * @ORM\Entity()
 */
class Album
{
    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
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
    private $release;


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
     * @param \DateTime $release
     *
     * @return Album
     */
    public function setRelease($release)
    {
        $this->release = $release;

        return $this;
    }

    /**
     * Get release
     *
     * @return \DateTime
     */
    public function getRelease()
    {
        return $this->release;
    }
}
