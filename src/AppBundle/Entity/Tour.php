<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tour
 *
 * @ORM\Table(name="tour")
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="AppBundle\Entity\TourRepo")
 */
class Tour
{

    /**
     * @var float
     *
     * @ORM\Column(name="price", type="float", nullable=true)
     */
    private $price;



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
     * @var integer
     *
     * @ORM\Column(name="tour_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tourId;

    /**
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @param string $location
     */
    public function setLocation($location)
    {
        $this->location = $location;
    }

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
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param string $country
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }

    /**
     * @return string
     */
    public function getLocationLink()
    {
        return $this->locationLink;
    }

    /**
     * @param string $locationLink
     */
    public function setLocationLink($locationLink)
    {
        $this->locationLink = $locationLink;
    }

    /**
     * @return string
     */
    public function getTicketLink()
    {
        return $this->ticketLink;
    }

    /**
     * @param string $ticketLink
     */
    public function setTicketLink($ticketLink)
    {
        $this->ticketLink = $ticketLink;
    }

    /**
     * @return int
     */
    public function getTourId()
    {
        return $this->tourId;
    }

    /**
     * @param int $tourId
     */
    public function setTourId($tourId)
    {
        $this->tourId = $tourId;
    }





    /**
     * Set price
     *
     * @param float $price
     *
     * @return Tour
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }



}
