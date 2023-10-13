<?php

namespace Opmvpc\Formes;

class Rectangle extends Forme
{
    private $point;
    private $width;
    private $height;

    public function __construct(Point $point, $width, $height, $couleur = '#000000')
    {
        parent::__construct($couleur);
        $this->point = $point;
        $this->width = $width;
        $this->height = $height;
    }

    public function getPoint()
    {
        return $this->point;
    }

    public function getWidth()
    {
        return (float) $this->width;
    }

    public function getHeight()
    {
        return (float) $this->height;
    }
}
