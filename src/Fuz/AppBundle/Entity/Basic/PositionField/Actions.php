<?php

namespace Fuz\AppBundle\Entity\Basic\PositionField;

use Doctrine\Common\Collections\ArrayCollection;

class Actions
{
    protected $actions;

    public function __construct()
    {
        $this->actions = new ArrayCollection();
    }

    public function getActions()
    {
        return $this->actions;
    }
}
