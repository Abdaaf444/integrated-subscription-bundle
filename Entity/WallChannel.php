<?php

/**
 * Auto generated by MySQL Workbench Schema Exporter.
 * Version 3.0.2 (doctrine2-annotation) on 2016-04-29 10:04:43.
 * Goto https://github.com/johmue/mysql-workbench-schema-exporter for more
 * information.
 */

namespace Integrated\Bundle\SubscriptionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Integrated\Bundle\SubscriptionBundle\Entity\WallChannel
 *
 * @ORM\Entity()
 * @ORM\Table(name="wall_channel", indexes={@ORM\Index(name="fk_subscription_wall_has_categories_subscription_wall1_idx", columns={"wall"})})
 */
class WallChannel
{
    /**
     * @ORM\Id
     * @ORM\Column(type="string", length=36)
     */
    protected $wall;

    /**
     * @ORM\Id
     * @ORM\Column(type="string", length=255)
     */
    protected $channel;

    /**
     * @ORM\ManyToOne(targetEntity="SubscriptionWall", inversedBy="wallChannels")
     * @ORM\JoinColumn(name="wall", referencedColumnName="id", nullable=false)
     */
    protected $subscriptionWall;

    public function __construct()
    {
    }

    /**
     * Set the value of wall.
     *
     * @param string $wall
     * @return WallChannel
     */
    public function setWall($wall)
    {
        $this->wall = $wall;

        return $this;
    }

    /**
     * Get the value of wall.
     *
     * @return string
     */
    public function getWall()
    {
        return $this->wall;
    }

    /**
     * Set the value of channel.
     *
     * @param string $channel
     * @return WallChannel
     */
    public function setChannel($channel)
    {
        $this->channel = $channel;

        return $this;
    }

    /**
     * Get the value of channel.
     *
     * @return string
     */
    public function getChannel()
    {
        return $this->channel;
    }

    /**
     * Set SubscriptionWall entity (many to one).
     *
     * @param SubscriptionWall $subscriptionWall
     * @return WallChannel
     */
    public function setSubscriptionWall(SubscriptionWall $subscriptionWall = null)
    {
        $this->subscriptionWall = $subscriptionWall;

        return $this;
    }

    /**
     * Get SubscriptionWall entity (many to one).
     *
     * @return SubscriptionWall
     */
    public function getSubscriptionWall()
    {
        return $this->subscriptionWall;
    }
}