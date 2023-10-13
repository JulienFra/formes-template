<?php

namespace Opmvpc\Formes;

abstract class Forme {
    protected string $couleur = "";
    public function __construct(string $couleur = '#000000') {
        $this->couleur = $couleur;
    }
    public function getCouleur(){
        return $this->couleur;
    }
}
