<?php
// Connexion à la B.D
include_once __DIR__.'/../../vendor/SimpleOrm.class.php';

class Article extends SimpleOrm {
    public $id;
    public $titre;
    public $description;
    public $prix;
    public $image;
}