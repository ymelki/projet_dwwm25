<?php

//var_dump($_POST);

// on recuperer l identifiant de l'article...

// on recuperer l'identifiant de l'article selectionné
$id_article=$_POST['id'];
// on recuperer la quantité de l'article selectionné
$quantite=$_POST['quantite'];

// recuperer  l entité article et une ligne de panier
include __DIR__.'/../entity/Article.php';
include __DIR__.'/../entity/row_cart.php';
 
// alimenter le panier
// on créé un panier
$my_row_cart=new row_cart();
// on insérer l'article dans la variable article grâce à l'ORM
$my_row_cart->article= Article::retrieveByPK($id_article);
$my_row_cart->quantite=$quantite ;
$my_row_cart->prix_total=$quantite*$my_row_cart->article->prix; 

var_dump($my_row_cart);

// il faut construire ensuite le panier complet
// il faut faire le cookie
// 

