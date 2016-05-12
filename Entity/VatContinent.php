<?php

/**
 * Auto generated by MySQL Workbench Schema Exporter.
 * Version 3.0.2 (doctrine2-annotation) on 2016-04-29 10:04:43.
 * Goto https://github.com/johmue/mysql-workbench-schema-exporter for more
 * information.
 */

namespace Integrated\Bundle\SubscriptionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Integrated\Bundle\SubscriptionBundle\Entity\VatContinent
 *
 * @ORM\Entity()
 * @ORM\Table(name="vat_continent")
 */
class VatContinent
{
    /**
     * @ORM\Id
     * @ORM\Column(type="string", length=2)
     */
    protected $continentCode;

    /**
     * @ORM\Column(type="decimal", precision=5, scale=3)
     */
    protected $percentage;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    protected $code;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    protected $disableWithVatId;

    /**
     * @ORM\OneToMany(targetEntity="VatType", mappedBy="vatContinent")
     * @ORM\JoinColumn(name="continentCode", referencedColumnName="continent", nullable=false)
     */
    protected $vatTypes;

    public function __construct()
    {
        $this->vatTypes = new ArrayCollection();
    }

    /**
     * Set the value of continentCode.
     *
     * @param string $continentCode
     * @return VatContinent
     */
    public function setContinentCode($continentCode)
    {
        $this->continentCode = $continentCode;

        return $this;
    }

    /**
     * Get the value of continentCode.
     *
     * @return string
     */
    public function getContinentCode()
    {
        return $this->continentCode;
    }

    /**
     * Set the value of percentage.
     *
     * @param float $percentage
     * @return VatContinent
     */
    public function setPercentage($percentage)
    {
        $this->percentage = $percentage;

        return $this;
    }

    /**
     * Get the value of percentage.
     *
     * @return float
     */
    public function getPercentage()
    {
        return $this->percentage;
    }

    /**
     * Set the value of code.
     *
     * @param string $code
     * @return VatContinent
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get the value of code.
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set the value of disableWithVatId.
     *
     * @param boolean $disableWithVatId
     * @return VatContinent
     */
    public function setDisableWithVatId($disableWithVatId)
    {
        $this->disableWithVatId = $disableWithVatId;

        return $this;
    }

    /**
     * Get the value of disableWithVatId.
     *
     * @return boolean
     */
    public function getDisableWithVatId()
    {
        return $this->disableWithVatId;
    }

    /**
     * Add VatType entity to collection (one to many).
     *
     * @param VatType $vatType
     * @return VatContinent
     */
    public function addVatType(VatType $vatType)
    {
        $this->vatTypes->add($vatType);

        return $this;
    }

    /**
     * Remove VatType entity from collection (one to many).
     *
     * @param VatType $vatType
     * @return VatContinent
     */
    public function removeVatType(VatType $vatType)
    {
        $this->vatTypes->removeElement($vatType);

        return $this;
    }

    /**
     * Get VatType entity collection (one to many).
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getVatTypes()
    {
        return $this->vatTypes;
    }
}