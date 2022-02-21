<?php
// Connexion à la B.D
include_once __DIR__.'/../../vendor/SimpleOrm.class.php';

class Commande extends SimpleOrm {
    public $id;
    public $prix_total;
}