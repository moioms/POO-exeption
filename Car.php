<?php


class Car
{
    private bool $hasParkBrake;


    public function __construct()
    {
        $this->hasParkBrake = true;
    }

    public function setParkBrake($hasParkBrake)
    {
        $this->hasParkBrake = $hasParkBrake;
    }

    public function start()
    {
        if ($this->hasParkBrake) {
            throw new LogicException("Le frein à main est actif !");
        }
    }
}
