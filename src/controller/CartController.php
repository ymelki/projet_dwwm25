<?php

function clear_cart(){
    setcookie("cart",null);
    unset($_COOKIE['cart']);
    include __DIR__.'/../../template/Viewcart.php';
}

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


    // Si il n'existe 
//var_dump($_POST);

// on recuperer l identifiant de l'article...

// on recuperer l'identifiant de l'article selectionné
$id_article=(int)$_POST['id'];
// on recuperer la quantité de l'article selectionné
$quantite=$_POST['quantite'];

// recuperer  l entité article et une ligne de panier
include __DIR__.'/../entity/Article.php';
include __DIR__.'/../entity/row_cart.php';
include __DIR__.'/../entity/cart.php     ';



    // Si le panier existe deja 
    // Travallier le panier existant

    if (isset($_COOKIE['cart'])){

         // Je recupere le cookie
        $my_cart_string=$_COOKIE['cart'];
        //je convertie en objet panier
        $moncart=json_decode($my_cart_string); 

    }
    else {
     
        // il faut construire ensuite le panier complet
        // on prend le cas ou le panier est vide car pas de cookies
        $moncart=new cart();
        // initialise le panier row_cart comme un tableau
        $moncart->row_cart=[];
        $moncart->total=0;
    }
 
    
    // on créé une ligne du panier
    $my_row_cart=new row_cart();
    // on insérer l'article dans la variable article grâce à l'ORM
    $my_row_cart->article= Article::retrieveByPK($id_article);
    $my_row_cart->quantite=$quantite ;
    $my_row_cart->prix_total=$quantite*$my_row_cart->article->prix; 


    // avant de rajouter si il est dans le panier ou pas ? Si il est dedans 
    // juste rajouter la quantité 

   // pacourir mon panier et verifier j'ai l 'id que je veux rajouter
   foreach($moncart->row_cart as $row){
 
       // Si on trouve que l'ID envoyé en POST est identique à l'ID presént dans le cookie
       if ($row->article->id ==  $id_article) {
           // on change la quantité : on ajoute la quantité envoyé avec celle présente dans le cookie
           $row->quantite=($row->quantite)+($quantite);
            // on change le prix : on modifie le prix
           $row->prix_total=$row->quantite*$row->article->prix;

           $moncart->total=$moncart->total + ($quantite*$row->article->prix);


                 
            // on doit convertir notre objet en chaine de caractere
            $mon_cart_encode=json_encode($moncart);
            // il faut faire le cookie
            setcookie("cart",$mon_cart_encode) ;

           include __DIR__.'/../../template/Viewcart.php';
           return;
       }
   }
 
    // vous avez deja les articles enregistré dans le cookie
    // $moncart->row_cart[]

    // vous avez deja l'article que vous voulez ajouté 
    //     $my_row_cart->article= Article::retrieveByPK($id_article);
    
    // si non je fais le array push
    // Ajouter dans le panier

    
    $moncart->total=$moncart->total + $my_row_cart->prix_total;
    array_push($moncart->row_cart, $my_row_cart);


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




