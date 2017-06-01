<?php

namespace Manager\CalendarBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use  BladeTester\CalendarBundle\Entity\Event as BaseEvent;

/**
 * Event
 *
 * @ORM\Table(name="manager_calendar")
 */
class Event extends BaseEvent
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
}

