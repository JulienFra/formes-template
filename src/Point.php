<?php

namespace Opmvpc\Formes;

class Point
{
    private $x;
    private $y;

    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function getX()
    {
        return (float) $this->x;
    }

    public function getY()
    {
        return (float) $this->y;
    }
    public function toArray()
    {
        return [
            'x' => $this->getX(),
            'y' => $this->getY(),
        ];
    }
}
