<?php

/**
 * Auto generated by MySQL Workbench Schema Exporter.
 * Version 3.0.2 (doctrine2-annotation) on 2016-04-29 10:04:43.
 * Goto https://github.com/johmue/mysql-workbench-schema-exporter for more
 * information.
 */

namespace Integrated\Bundle\SubscriptionBundle\Entity;

use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Integrated\Bundle\SubscriptionBundle\Entity\SubscriptionType
 *
 * @ORM\Entity()
 * @ORM\Table(name="subscription_type", indexes={@ORM\Index(name="fk_subscription_type_vat_type1_idx", columns={"typevat"})})
 */
class SubscriptionType
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="UUID")
     * @ORM\Column(type="string", length=36)
     */
    protected $id;

    /**
     * @ORM\Column(name="`name`", type="string", length=200)
     */
    protected $name;

    /**
     * @ORM\Column(type="string", length=1000, nullable=true)
     */
    protected $teaser;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    protected $startdate;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    protected $enddate;

    /**
     * @ORM\Column(name="`condition`", type="string", length=255)
     */
    protected $condition;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    protected $disabled;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    protected $channels;

    /**
     * @ORM\Column(type="string", length=36, nullable=true)
     */
    protected $typevat;

    /**
     * @ORM\OneToMany(targetEntity="Subscription", mappedBy="subscriptionType")
     * @ORM\JoinColumn(name="id", referencedColumnName="`type`", nullable=false)
     */
    protected $subscriptions;

    /**
     * @ORM\OneToMany(targetEntity="SubscriptionTypeVariant", mappedBy="subscriptionType")
     * @ORM\JoinColumn(name="id", referencedColumnName="subscription_type_id", nullable=false)
     */
    protected $subscriptionTypeVariants;

    /**
     * @ORM\ManyToOne(targetEntity="VatType", inversedBy="subscriptionTypes")
     * @ORM\JoinColumn(name="typevat", referencedColumnName="id")
     */
    protected $vatType;

    /**
     * @ORM\ManyToMany(targetEntity="SubscriptionWall", inversedBy="subscriptionTypes")
     * @ORM\JoinTable(name="subscription_configuration",
     *     joinColumns={@ORM\JoinColumn(name="subscription_type", referencedColumnName="id", nullable=false)},
     *     inverseJoinColumns={@ORM\JoinColumn(name="subscription_wall", referencedColumnName="id", nullable=false)}
     * )
     */
    protected $subscriptionWalls;

    public function __construct()
    {
        $this->subscriptions = new ArrayCollection();
        $this->subscriptionTypeVariants = new ArrayCollection();
        $this->subscriptionWalls = new ArrayCollection();
    }

    /**
     * Set the value of id.
     *
     * @param string $id
     * @return \Integrated\Bundle\SubscriptionBundle\Entity\SubscriptionType
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of id.
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of name.
     *
     * @param string $name
     * @return \Integrated\Bundle\SubscriptionBundle\Entity\SubscriptionType
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of teaser.
     *
     * @param string $teaser
     * @return \Integrated\Bundle\SubscriptionBundle\Entity\SubscriptionType
     */
    public function setTeaser($teaser)
    {
        $this->teaser = $teaser;

        return $this;
    }

    /**
     * Get the value of teaser.
     *
     * @return string
     */
    public function getTeaser()
    {
        return $this->teaser;
    }

    /**
     * Set the value of startdate.
     *
     * @param \DateTime $startdate
     * @return \Integrated\Bundle\SubscriptionBundle\Entity\SubscriptionType
     */
    public function setStartdate($startdate)
    {
        $this->startdate = $startdate;

        return $this;
    }

    /**
     * Get the value of startdate.
     *
     * @return \DateTime
     */
    public function getStartdate()
    {
        return $this->startdate;
    }

    /**
     * Set the value of enddate.
     *
     * @param \DateTime $enddate
     * @return \Integrated\Bundle\SubscriptionBundle\Entity\SubscriptionType
     */
    public function setEnddate($enddate)
    {
        $this->enddate = $enddate;

        return $this;
    }

    /**
     * Get the value of enddate.
     *
     * @return \DateTime
     */
    public function getEnddate()
    {
        return $this->enddate;
    }

    /**
     * Set the value of condition.
     *
     * @param string $condition
     * @return \Integrated\Bundle\SubscriptionBundle\Entity\SubscriptionType
     */
    public function setCondition($condition)
    {
        $this->condition = $condition;

        return $this;
    }

    /**
     * Get the value of condition.
     *
     * @return string
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * Set the value of disabled.
     *
     * @param boolean $disabled
     * @return \Integrated\Bundle\SubscriptionBundle\Entity\SubscriptionType
     */
    public function setDisabled($disabled)
    {
        $this->disabled = $disabled;

        return $this;
    }

    /**
     * Get the value of disabled.
     *
     * @return boolean
     */
    public function getDisabled()
    {
        return $this->disabled;
    }

    /**
     * Set the value of channels.
     *
     * @param string $channels
     * @return \Integrated\Bundle\SubscriptionBundle\Entity\SubscriptionType
     */
    public function setChannels($channels)
    {
        $this->channels = $channels;

        return $this;
    }

    /**
     * Get the value of channels.
     *
     * @return string
     */
    public function getChannels()
    {
        return $this->channels;
    }

    /**
     * Set the value of typevat.
     *
     * @param string $typevat
     * @return \Integrated\Bundle\SubscriptionBundle\Entity\SubscriptionType
     */
    public function setTypevat($typevat)
    {
        $this->typevat = $typevat;

        return $this;
    }

    /**
     * Get the value of typevat.
     *
     * @return string
     */
    public function getTypevat()
    {
        return $this->typevat;
    }

    /**
     * Add Subscription entity to collection (one to many).
     *
     * @param \Integrated\Bundle\SubscriptionBundle\Entity\Subscription $subscription
     * @return \Integrated\Bundle\SubscriptionBundle\Entity\SubscriptionType
     */
    public function addSubscription(Subscription $subscription)
    {
        $this->subscriptions[] = $subscription;

        return $this;
    }

    /**
     * Remove Subscription entity from collection (one to many).
     *
     * @param \Integrated\Bundle\SubscriptionBundle\Entity\Subscription $subscription
     * @return \Integrated\Bundle\SubscriptionBundle\Entity\SubscriptionType
     */
    public function removeSubscription(Subscription $subscription)
    {
        $this->subscriptions->removeElement($subscription);

        return $this;
    }

    /**
     * Get Subscription entity collection (one to many).
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSubscriptions()
    {
        return $this->subscriptions;
    }

    /**
     * Add SubscriptionTypeVariant entity to collection (one to many).
     *
     * @param \Integrated\Bundle\SubscriptionBundle\Entity\SubscriptionTypeVariant $subscriptionTypeVariant
     * @return \Integrated\Bundle\SubscriptionBundle\Entity\SubscriptionType
     */
    public function addSubscriptionTypeVariant(SubscriptionTypeVariant $subscriptionTypeVariant)
    {
        $this->subscriptionTypeVariants[] = $subscriptionTypeVariant;

        return $this;
    }

    /**
     * Remove SubscriptionTypeVariant entity from collection (one to many).
     *
     * @param \Integrated\Bundle\SubscriptionBundle\Entity\SubscriptionTypeVariant $subscriptionTypeVariant
     * @return \Integrated\Bundle\SubscriptionBundle\Entity\SubscriptionType
     */
    public function removeSubscriptionTypeVariant(SubscriptionTypeVariant $subscriptionTypeVariant)
    {
        $this->subscriptionTypeVariants->removeElement($subscriptionTypeVariant);

        return $this;
    }

    /**
     * Get SubscriptionTypeVariant entity collection (one to many).
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSubscriptionTypeVariants()
    {
        return $this->subscriptionTypeVariants;
    }

    /**
     * Set VatType entity (many to one).
     *
     * @param \Integrated\Bundle\SubscriptionBundle\Entity\VatType $vatType
     * @return \Integrated\Bundle\SubscriptionBundle\Entity\SubscriptionType
     */
    public function setVatType(VatType $vatType = null)
    {
        $this->vatType = $vatType;

        return $this;
    }

    /**
     * Get VatType entity (many to one).
     *
     * @return \Integrated\Bundle\SubscriptionBundle\Entity\VatType
     */
    public function getVatType()
    {
        return $this->vatType;
    }

    /**
     * Add SubscriptionWall entity to collection.
     *
     * @param \Integrated\Bundle\SubscriptionBundle\Entity\SubscriptionWall $subscriptionWall
     * @return \Integrated\Bundle\SubscriptionBundle\Entity\SubscriptionType
     */
    public function addSubscriptionWall(SubscriptionWall $subscriptionWall)
    {
        $subscriptionWall->addSubscriptionType($this);
        $this->subscriptionWalls[] = $subscriptionWall;

        return $this;
    }

    /**
     * Remove SubscriptionWall entity from collection.
     *
     * @param \Integrated\Bundle\SubscriptionBundle\Entity\SubscriptionWall $subscriptionWall
     * @return \Integrated\Bundle\SubscriptionBundle\Entity\SubscriptionType
     */
    public function removeSubscriptionWall(SubscriptionWall $subscriptionWall)
    {
        $subscriptionWall->removeSubscriptionType($this);
        $this->subscriptionWalls->removeElement($subscriptionWall);

        return $this;
    }

    /**
     * Get SubscriptionWall entity collection.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSubscriptionWalls()
    {
        return $this->subscriptionWalls;
    }

    public function __sleep()
    {
        return array('id', 'name', 'teaser', 'startdate', 'enddate', 'condition', 'disabled', 'channels', 'typevat');
    }
}