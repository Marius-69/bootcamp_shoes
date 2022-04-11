<?php

class Stock
{
    public $marque;
    public $pointure;
    public $prix;
    public $etat;

    public function __construct($marque,$pointure,$prix,$etat)
    {
        $this->marque = $marque;
        $this->pointure = $pointure;
        $this->prix = $prix;
        $this->etat = $etat;
    }

    public function setMarque(string $marque): void
    {
        $this->marque = $marque;
    }

    public function getMarque(): string
    {
        return $this->marque;
    }

    public function setPointure(string $pointure): void
    {
        $this->pointure = $pointure;
    }

    public function getPointure(): int
    {
        return $this->pointure;
    }

    public function setPrix(string $prix): void
    {
        $this->prix = $prix;
    }

    public function getPrix(): int
    {
        return $this->prix;
    }

    public function setEtat(string $etat): void
    {
        $this->etat = $etat;
    }

    public function getEtat(): string
    {
        return $this->etat;
    }
}

?>