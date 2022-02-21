<?php
// Afficher le panier. Je recupere le cookie que je convertie en objet panier
function my_cart(){
  
  // renvoyer le cookie 

    // Je recupere le cookie
    $my_cart_string=$_COOKIE['cart'];
    //je convertie en objet panier
    $moncart=json_decode($my_cart_string); 
   
    include __DIR__.'/../../template/Viewcart.php';
}
function generate_cart(){
//var_dump($_POST);

// on recuperer l identifiant de l'article...

// on recuperer l'identifiant de l'article selectionné
$id_article=$_POST['id'];
// on recuperer la quantité de l'article selectionné
$quantite=$_POST['quantite'];

// recuperer  l entité article et une ligne de panier
include __DIR__.'/../entity/Article.php';
include __DIR__.'/../entity/row_cart.php';
include __DIR__.'/../entity/cart.php     ';
 
 
// on créé une ligne du panier
$my_row_cart=new row_cart();
// on insérer l'article dans la variable article grâce à l'ORM
$my_row_cart->article= Article::retrieveByPK($id_article);
$my_row_cart->quantite=$quantite ;
$my_row_cart->prix_total=$quantite*$my_row_cart->article->prix; 



echo "<br />";echo "<br />";echo "<br />";echo "<br />";
 

// il faut construire ensuite le panier complet
// on prend le cas ou le panier est vide car pas de cookies
$moncart=new cart();
$moncart->row_cart=$my_row_cart;
$moncart->total=$my_row_cart->prix_total;

// on doit convertir notre objet en chaine de caractere
$mon_cart_encode=json_encode($moncart);
// il faut faire le cookie
setcookie("cart",$mon_cart_encode) ;
// on créé un cookie qui s'appelle 
// "cart" le nom qu on veut
// deuxieme parametre ce qu on veut stocker
// renvoie la vue
include __DIR__.'/../../template/Viewcart.php';
}


