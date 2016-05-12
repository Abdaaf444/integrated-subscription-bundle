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
 * Integrated\Bundle\SubscriptionBundle\Entity\VatType
 *
 * @ORM\Entity()
 * @ORM\Table(name="vat_type", indexes={@ORM\Index(name="fk_vat_type_vat_country1_idx", columns={"country"}), @ORM\Index(name="fk_vat_type_vat_continent1_idx", columns={"continent"})})
 */
class VatType
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="UUID")
     * @ORM\Column(type="string", length=36)
     */
    protected $id;

    /**
     * @ORM\Column(name="`name`", type="string", length=45)
     */
    protected $name;

    /**
     * @ORM\Column(type="decimal", precision=5, scale=3, nullable=true)
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
     * @ORM\Column(type="string", length=3, nullable=true)
     */
    protected $country;

    /**
     * @ORM\Column(type="string", length=2, nullable=true)
     */
    protected $continent;

    /**
     * @ORM\OneToMany(targetEntity="SubscriptionType", mappedBy="vatType")
     * @ORM\JoinColumn(name="id", referencedColumnName="typevat", nullable=false)
     */
    protected $subscriptionTypes;

    /**
     * @ORM\ManyToOne(targetEntity="VatCountry", inversedBy="vatTypes")
     * @ORM\JoinColumn(name="country", referencedColumnName="countryCode")
     */
    protected $vatCountry;

    /**
     * @ORM\ManyToOne(targetEntity="VatContinent", inversedBy="vatTypes")
     * @ORM\JoinColumn(name="continent", referencedColumnName="continentCode")
     */
    protected $vatContinent;

    public function __construct()
    {
        $this->subscriptionTypes = new ArrayCollection();
    }

    /**
     * @param string $id
     * @return VatType
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $name
     * @return VatType
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param float $percentage
     * @return VatType
     */
    public function setPercentage($percentage)
    {
        $this->percentage = $percentage;

        return $this;
    }

    /**
     * @return float
     */
    public function getPercentage()
    {
        return $this->percentage;
    }

    /**
     * @param string $code
     * @return VatType
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param boolean $disableWithVatId
     * @return VatType
     */
    public function setDisableWithVatId($disableWithVatId)
    {
        $this->disableWithVatId = $disableWithVatId;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getDisableWithVatId()
    {
        return $this->disableWithVatId;
    }

    /**
     * @param string $country
     * @return VatType
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param string $continent
     * @return VatType
     */
    public function setContinent($continent)
    {
        $this->continent = $continent;

        return $this;
    }

    /**
     * @return string
     */
    public function getContinent()
    {
        return $this->continent;
    }

    /**
     * Add SubscriptionType entity to collection (one to many).
     *
     * @param SubscriptionType $subscriptionType
     * @return VatType
     */
    public function addSubscriptionType(SubscriptionType $subscriptionType)
    {
        $this->subscriptionTypes->add($subscriptionType);

        return $this;
    }

    /**
     * Remove SubscriptionType entity from collection (one to many).
     *
     * @param SubscriptionType $subscriptionType
     * @return VatType
     */
    public function removeSubscriptionType(SubscriptionType $subscriptionType)
    {
        $this->subscriptionTypes->removeElement($subscriptionType);

        return $this;
    }

    /**
     * Get SubscriptionType entity collection (one to many).
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSubscriptionTypes()
    {
        return $this->subscriptionTypes;
    }

    /**
     * Set VatCountry entity (many to one).
     *
     * @param VatCountry $vatCountry
     * @return VatType
     */
    public function setVatCountry(VatCountry $vatCountry = null)
    {
        $this->vatCountry = $vatCountry;

        return $this;
    }

    /**
     * Get VatCountry entity (many to one).
     *
     * @return VatCountry
     */
    public function getVatCountry()
    {
        return $this->vatCountry;
    }

    /**
     * Set VatContinent entity (many to one).
     *
     * @param VatContinent $vatContinent
     * @return VatType
     */
    public function setVatContinent(VatContinent $vatContinent = null)
    {
        $this->vatContinent = $vatContinent;

        return $this;
    }

    /**
     * Get VatContinent entity (many to one).
     *
     * @return VatContinent
     */
    public function getVatContinent()
    {
        return $this->vatContinent;
    }
}