<?php

namespace Opmvpc\Formes;

use TypeError;

class Canvas extends Forme
{
    private $width;
    private $height;
    private $formes = [];

    public function __construct($width, $height, $couleur = '#FFFFFF')
    {
        parent::__construct($couleur);
        $this->width = $width;
        $this->height = $height;
    }

    public function getWidth()
    {
        return floatval($this->width);
    }

    public function getHeight()
    {
        return floatval($this->height); 
    }

    public function getFormes()
    {
        return $this->formes;
    }

    public function add($forme)
{
    if ($forme instanceof Point) {
        throw new TypeError("Impossible d'ajouter un objet de la classe Point");
    }

    $this->formes[] = $forme;
}
}

