<?php

/**
 * Auto generated by MySQL Workbench Schema Exporter.
 * Version 3.0.2 (doctrine2-annotation) on 2016-04-22 10:51:54.
 * Goto https://github.com/johmue/mysql-workbench-schema-exporter for more
 * information.
 */

namespace Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Entity\ContentChannel
 *
 * @ORM\Entity(repositoryClass="ContentChannelRepository")
 * @ORM\Table(name="content_channel")
 */
class ContentChannel
{
    /**
     * @ORM\Id
     * @ORM\Column(type="string", length=36)
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=200)
     */
    protected $description;

    /**
     * @ORM\ManyToMany(targetEntity="SubscriptionWall", inversedBy="contentChannels")
     * @ORM\JoinTable(name="wall_channels",
     *     joinColumns={@ORM\JoinColumn(name="channel", referencedColumnName="id", nullable=false)},
     *     inverseJoinColumns={@ORM\JoinColumn(name="subscription_wall", referencedColumnName="id", nullable=false)}
     * )
     */
    protected $subscriptionWalls;

    public function __construct()
    {
        $this->subscriptionWalls = new ArrayCollection();
    }

    /**
     * Set the value of id.
     *
     * @param string $id
     * @return \Entity\ContentChannel
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
     * Set the value of description.
     *
     * @param string $description
     * @return \Entity\ContentChannel
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of description.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Add SubscriptionWall entity to collection.
     *
     * @param \Entity\SubscriptionWall $subscriptionWall
     * @return \Entity\ContentChannel
     */
    public function addSubscriptionWall(SubscriptionWall $subscriptionWall)
    {
        $subscriptionWall->addContentChannel($this);
        $this->subscriptionWalls[] = $subscriptionWall;

        return $this;
    }

    /**
     * Remove SubscriptionWall entity from collection.
     *
     * @param \Entity\SubscriptionWall $subscriptionWall
     * @return \Entity\ContentChannel
     */
    public function removeSubscriptionWall(SubscriptionWall $subscriptionWall)
    {
        $subscriptionWall->removeContentChannel($this);
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
        return array('id', 'description');
    }
}