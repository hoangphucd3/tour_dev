<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * TourOrder
 *
 * @ORM\Table(name="tour_order")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TourOrderRepository")
 */
class TourOrder
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
     * @var int
     *
     * @ORM\Column(name="trangThai", type="integer")
     */
    private $status;

    /**
     * @var datetime
     *
     * @ORM\Column(name="thoiGianTao", type="datetime")
     */
    private $createdAt;

    /**
     * @var datetime
     *
     * @ORM\Column(name="thoigianCapNhat", type="datetime")
     */
    private $updatedAt;

    /**
     * @var string
     *
     * @ORM\Column(name="ten", type="string")
     */
    private $billingName;

    /**
     * @var string
     *
     * @ORM\Column(name="dienThoai", type="string")
     */
    private $billingPhone;

    /**
     * @var string
     *
     * @ORM\Column(name="diaChi_1", type="string")
     */
    private $billingAddress1;

    /**
     * @var string
     *
     * @ORM\Column(name="diaChi_2", type="string")
     */
    private $billingAddress2;

    /**
     * @var string
     *
     * @ORM\Column(name="thanhPho", type="string")
     */
    private $billingCity;

    /**
     * @var string
     *
     * @ORM\Column(name="maBuuChinh", type="string")
     */
    private $billingPostCode;

    /**
     * @var User
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User", inversedBy="orders")
     * @ORM\JoinColumn(name="khachHang", referencedColumnName="id")
     */
    private $customer;

    /**
     * @var Tour
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Tour")
     * @ORM\JoinColumn(name="tour", referencedColumnName="id")
     */
    private $tour;

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
     * Set status
     *
     * @param integer $status
     *
     * @return TourOrder
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return integer
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return TourOrder
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return TourOrder
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set billingName
     *
     * @param string $billingName
     *
     * @return TourOrder
     */
    public function setBillingName($billingName)
    {
        $this->billingName = $billingName;

        return $this;
    }

    /**
     * Get billingName
     *
     * @return string
     */
    public function getBillingName()
    {
        return $this->billingName;
    }

    /**
     * Set billingPhone
     *
     * @param string $billingPhone
     *
     * @return TourOrder
     */
    public function setBillingPhone($billingPhone)
    {
        $this->billingPhone = $billingPhone;

        return $this;
    }

    /**
     * Get billingPhone
     *
     * @return string
     */
    public function getBillingPhone()
    {
        return $this->billingPhone;
    }

    /**
     * Set billingAddress1
     *
     * @param string $billingAddress1
     *
     * @return TourOrder
     */
    public function setBillingAddress1($billingAddress1)
    {
        $this->billingAddress1 = $billingAddress1;

        return $this;
    }

    /**
     * Get billingAddress1
     *
     * @return string
     */
    public function getBillingAddress1()
    {
        return $this->billingAddress1;
    }

    /**
     * Set billingAddress2
     *
     * @param string $billingAddress2
     *
     * @return TourOrder
     */
    public function setBillingAddress2($billingAddress2)
    {
        $this->billingAddress2 = $billingAddress2;

        return $this;
    }

    /**
     * Get billingAddress2
     *
     * @return string
     */
    public function getBillingAddress2()
    {
        return $this->billingAddress2;
    }

    /**
     * Set billingCity
     *
     * @param string $billingCity
     *
     * @return TourOrder
     */
    public function setBillingCity($billingCity)
    {
        $this->billingCity = $billingCity;

        return $this;
    }

    /**
     * Get billingCity
     *
     * @return string
     */
    public function getBillingCity()
    {
        return $this->billingCity;
    }

    /**
     * Set billingPostCode
     *
     * @param string $billingPostCode
     *
     * @return TourOrder
     */
    public function setBillingPostCode($billingPostCode)
    {
        $this->billingPostCode = $billingPostCode;

        return $this;
    }

    /**
     * Get billingPostCode
     *
     * @return string
     */
    public function getBillingPostCode()
    {
        return $this->billingPostCode;
    }

    /**
     * Set condition
     *
     * @param string $condition
     *
     * @return TourOrder
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
     * Set customer
     *
     * @param \AppBundle\Entity\User $customer
     *
     * @return TourOrder
     */
    public function setCustomer(\AppBundle\Entity\User $customer = null)
    {
        $this->customer = $customer;

        return $this;
    }

    /**
     * Get customer
     *
     * @return \AppBundle\Entity\User
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * Set tour
     *
     * @param \AppBundle\Entity\Tour $tour
     *
     * @return TourOrder
     */
    public function setTour(\AppBundle\Entity\Tour $tour = null)
    {
        $this->tour = $tour;

        return $this;
    }

    /**
     * Get tour
     *
     * @return \AppBundle\Entity\Tour
     */
    public function getTour()
    {
        return $this->tour;
    }
}
