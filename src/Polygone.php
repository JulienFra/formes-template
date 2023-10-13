<?php

namespace Opmvpc\Formes;

class Polygone extends Forme
{
    private $points;

    public function __construct(array $points, $couleur = '#000000')
    {
        parent::__construct($couleur);
        $this->points = $points;
    }

    
    public function getPoints() {
        $pointArray = [];
        foreach ($this->points as $point) {
            $pointArray[] = [$point->getX(), $point->getY()];
        }
        return $pointArray;
    }
}
