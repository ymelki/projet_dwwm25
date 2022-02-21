<?php
// Connexion à la B.D
include_once __DIR__.'/../../vendor/SimpleOrm.class.php';

class Commande_ligne extends SimpleOrm {
    public $id;
    public $id_article;
    public $quantite;
    public $prix;
    public $id_commande;
}