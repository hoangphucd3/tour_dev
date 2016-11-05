<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tour
 *
 * @ORM\Table(name="tour")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TourRepository")
 */
class Tour
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="ten", type="string")
     */
    private $tourName;

    /**
     * @var string
     *
     * @ORM\Column(name="ngayBatDau", type="datetime")
     */
    private $startDate;

    /**
     * @var string
     *
     * @ORM\Column(name="ngayKetThuc", type="datetime")
     */
    private $endDate;

    /**
     * @var int
     *
     * @ORM\Column(name="soLuong", type="integer")
     */
    private $amount;

    /**
     * @var string
     *
     * @ORM\Column(name="moTa", type="string")
     */
    private $description;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\TourLocation", mappedBy="tour", cascade={"remove"})
     */
    private $locations;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\TourHotel", mappedBy="hotel", cascade={"remove"})
     */
    private $hotels;

    /**
     * @var string
     *
     * @ORM\Column(name="trangThai", type="string")
     */
    private $status;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * @var string
     */
    private $condition;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->locations = new \Doctrine\Common\Collections\ArrayCollection();
        $this->hotels = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set tourName
     *
     * @param string $tourName
     *
     * @return Tour
     */
    public function setTourName($tourName)
    {
        $this->tourName = $tourName;

        return $this;
    }

    /**
     * Get tourName
     *
     * @return string
     */
    public function getTourName()
    {
        return $this->tourName;
    }

    /**
     * Set startDate
     *
     * @param \DateTime $startDate
     *
     * @return Tour
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * Get startDate
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Set endDate
     *
     * @param \DateTime $endDate
     *
     * @return Tour
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * Get endDate
     *
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Set amount
     *
     * @param integer $amount
     *
     * @return Tour
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get amount
     *
     * @return integer
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Tour
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return Tour
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set condition
     *
     * @param string $condition
     *
     * @return Tour
     */
    public function setCondition($condition)
    {
        $this->condition = $condition;

        return $this;
    }

    /**
     * Get condition
     *
     * @return string
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * Add location
     *
     * @param \AppBundle\Entity\TourLocation $location
     *
     * @return Tour
     */
    public function addLocation(\AppBundle\Entity\TourLocation $location)
    {
        $this->locations[] = $location;

        return $this;
    }

    /**
     * Remove location
     *
     * @param \AppBundle\Entity\TourLocation $location
     */
    public function removeLocation(\AppBundle\Entity\TourLocation $location)
    {
        $this->locations->removeElement($location);
    }

    /**
     * Get locations
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getLocations()
    {
        return $this->locations;
    }

    /**
     * Add hotel
     *
     * @param \AppBundle\Entity\TourHotel $hotel
     *
     * @return Tour
     */
    public function addHotel(\AppBundle\Entity\TourHotel $hotel)
    {
        $this->hotels[] = $hotel;

        return $this;
    }

    /**
     * Remove hotel
     *
     * @param \AppBundle\Entity\TourHotel $hotel
     */
    public function removeHotel(\AppBundle\Entity\TourHotel $hotel)
    {
        $this->hotels->removeElement($hotel);
    }

    /**
     * Get hotels
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getHotels()
    {
        return $this->hotels;
    }
}
