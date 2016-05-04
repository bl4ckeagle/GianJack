<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tour
 *
 * @ORM\Table(name="tour")
 * @ORM\Entity()
 */
class Tour
{
    /**
     * @var integer
     *
     * @ORM\Column(name="tour_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tourId;

    /**
     * @var string
     *
     * @ORM\Column(name="location", type="text", nullable=false)
     */
    private $location;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=false)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="country", type="text", nullable=false)
     */
    private $country;

    /**
     * @var string
     *
     * @ORM\Column(name="location_link", type="text", nullable=true)
     */
    private $locationLink;

    /**
     * @var string
     *
     * @ORM\Column(name="ticket_link", type="text", nullable=true)
     */
    private $ticketLink;



    /**
     * Get tourId
     *
     * @return integer
     */
    public function getTourId()
    {
        return $this->tourId;
    }

    /**
     * Set location
     *
     * @param string $location
     *
     * @return Tour
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

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Tour
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
     * Set country
     *
     * @param string $country
     *
     * @return Tour
     */
    public function setCountry($country)
    {
        $this->country = $country;
    
        return $this;
    }

    /**
     * Get country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set locationLink
     *
     * @param string $locationLink
     *
     * @return Tour
     */
    public function setLocationLink($locationLink)
    {
        $this->locationLink = $locationLink;
    
        return $this;
    }

    /**
     * Get locationLink
     *
     * @return string
     */
    public function getLocationLink()
    {
        return $this->locationLink;
    }

    /**
     * Set ticketLink
     *
     * @param string $ticketLink
     *
     * @return Tour
     */
    public function setTicketLink($ticketLink)
    {
        $this->ticketLink = $ticketLink;
    
        return $this;
    }

    /**
     * Get ticketLink
     *
     * @return string
     */
    public function getTicketLink()
    {
        return $this->ticketLink;
    }
}
