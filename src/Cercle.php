<?php

namespace Opmvpc\Formes;


class Cercle extends Forme
{
    private $centre;
    private float $rayon;

    public function __construct(Point $centre, $rayon, $couleur = '#000000')
    {
        parent::__construct($couleur);
        $this->centre = $centre;
        $this->rayon = $rayon;
    }

    public function getCentre()
    {
        return $this->centre;
    }

    public function getRayon()
    {
        return $this->rayon;
    }
}

