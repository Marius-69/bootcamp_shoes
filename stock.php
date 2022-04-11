<?php

class Stock
{
    public $libelle;
    public $prix_achat;
    public $prix_vente;
    public $fournisseur;
    public $nb_produit;

    public function __construct($libelle,$prix_achat,$prix_vente,$fournisseur,$nb_produit)
    {
        $this->libelle = $libelle;
        $this->prix_achat = $prix_achat;
        $this->prix_vente = $prix_vente;
        $this->fournisseur = $fournisseur;
        $this->nb_produit = $nb_produit;
    }

    public function setLibelle(string $libelle): void
    {
        $this->libelle = $libelle;
    }

    public function getLibelle(): string
    {
        return $this->libelle;
    }

    public function setPrix_achat(string $prix_achat): void
    {
        $this->prix_achat = $prix_achat;
    }

    public function getPrix_achat(): int
    {
        return $this->prix_achat;
    }

    public function setPrix_vente(string $prix_vente): void
    {
        $this->prix_vente = $prix_vente;
    }

    public function getPrix_vente(): int
    {
        return $this->prix_vente;
    }

    public function setFournisseur(string $fournisseur): void
    {
        $this->fournisseur = $fournisseur;
    }

    public function getFournisseur(): string
    {
        return $this->fournisseur;
    }

    public function setNb_produit(string $nb_produit): void
    {
        $this->nb_produit = $nb_produit;
    }

    public function getNb_produit(): int
    {
        return $this->nb_produit;
    }

    public function total(): int
    {
        return $this->nb_produit = $this->nb_produit + 8;
    }
    
}

?>