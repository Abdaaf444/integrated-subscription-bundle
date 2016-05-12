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
 * Integrated\Bundle\SubscriptionBundle\Entity\SubscriptionWall
 *
 * @ORM\Entity()
 * @ORM\Table(name="subscription_wall")
 */
class SubscriptionWall
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
     * @ORM\Column(type="boolean", nullable=true)
     */
    protected $disabled;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    protected $freetier;

    /**
     * @ORM\OneToMany(targetEntity="WallChannel", mappedBy="subscriptionWall")
     * @ORM\JoinColumn(name="id", referencedColumnName="wall", nullable=false)
     */
    protected $wallChannels;

    /**
     * @ORM\ManyToMany(targetEntity="SubscriptionType", mappedBy="subscriptionWalls")
     */
    protected $subscriptionTypes;

    public function __construct()
    {
        $this->wallChannels = new ArrayCollection();
        $this->subscriptionTypes = new ArrayCollection();
    }

    /**
     * Set the value of id.
     *
     * @param string $id
     * @return \Integrated\Bundle\SubscriptionBundle\Entity\SubscriptionWall
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
     * @return \Integrated\Bundle\SubscriptionBundle\Entity\SubscriptionWall
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
     * @return \Integrated\Bundle\SubscriptionBundle\Entity\SubscriptionWall
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
     * Set the value of disabled.
     *
     * @param boolean $disabled
     * @return \Integrated\Bundle\SubscriptionBundle\Entity\SubscriptionWall
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
     * Set the value of freetier.
     *
     * @param string $freetier
     * @return \Integrated\Bundle\SubscriptionBundle\Entity\SubscriptionWall
     */
    public function setFreetier($freetier)
    {
        $this->freetier = $freetier;

        return $this;
    }

    /**
     * Get the value of freetier.
     *
     * @return string
     */
    public function getFreetier()
    {
        return $this->freetier;
    }

    /**
     * Add WallChannel entity to collection (one to many).
     *
     * @param \Integrated\Bundle\SubscriptionBundle\Entity\WallChannel $wallChannel
     * @return \Integrated\Bundle\SubscriptionBundle\Entity\SubscriptionWall
     */
    public function addWallChannel(WallChannel $wallChannel)
    {
        $this->wallChannels->add($wallChannel);

        return $this;
    }

    /**
     * Remove WallChannel entity from collection (one to many).
     *
     * @param \Integrated\Bundle\SubscriptionBundle\Entity\WallChannel $wallChannel
     * @return \Integrated\Bundle\SubscriptionBundle\Entity\SubscriptionWall
     */
    public function removeWallChannel(WallChannel $wallChannel)
    {
        $this->wallChannels->removeElement($wallChannel);

        return $this;
    }

    /**
     * Get WallChannel entity collection (one to many).
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getWallChannels()
    {
        return $this->wallChannels;
    }

    /**
     * Add SubscriptionType entity to collection.
     *
     * @param \Integrated\Bundle\SubscriptionBundle\Entity\SubscriptionType $subscriptionType
     * @return \Integrated\Bundle\SubscriptionBundle\Entity\SubscriptionWall
     */
    public function addSubscriptionType(SubscriptionType $subscriptionType)
    {
        $this->subscriptionTypes->add($subscriptionType);

        return $this;
    }

    /**
     * Remove SubscriptionType entity from collection.
     *
     * @param \Integrated\Bundle\SubscriptionBundle\Entity\SubscriptionType $subscriptionType
     * @return \Integrated\Bundle\SubscriptionBundle\Entity\SubscriptionWall
     */
    public function removeSubscriptionType(SubscriptionType $subscriptionType)
    {
        $this->subscriptionTypes->removeElement($subscriptionType);

        return $this;
    }

    /**
     * Get SubscriptionType entity collection.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSubscriptionTypes()
    {
        return $this->subscriptionTypes;
    }

    public function __sleep()
    {
        return array('id', 'name', 'teaser', 'disabled', 'freetier');
    }
}