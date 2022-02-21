<?php
// Routeur

// echo $_SERVER['PATH_INFO'];


// si il n y a rien après l URL
if (isset($_SERVER['PATH_INFO'])==false   ||  ($_SERVER['PATH_INFO']=="/")      ){
//   echo "nous sommes dans la page d accueuil";
    // APPEL DU CONTROLLEUR
   include __DIR__.'/../src/controller/HomeController.php';

}

else if ($_SERVER['PATH_INFO']=="/catalog"){
   
    include __DIR__.'/../src/controller/CatalogController.php';


  //  include __DIR__.'/../templates/Liste_utilisateur.php';

}

else if ($_SERVER['PATH_INFO']=="/add_cart"){
   
  include __DIR__.'/../src/controller/CartController.php';
  generate_cart();

//  include __DIR__.'/../templates/Liste_utilisateur.php';

}


else if ($_SERVER['PATH_INFO']=="/my_cart"){
   
  include __DIR__.'/../src/controller/CartController.php';

  my_cart();
//  include __DIR__.'/../templates/Liste_utilisateur.php';

}

else if ($_SERVER['PATH_INFO']=="/clear_cart"){
   
  include __DIR__.'/../src/controller/CartController.php';

  clear_cart();
//  include __DIR__.'/../templates/Liste_utilisateur.php';

}
else if ($_SERVER['PATH_INFO']=="/order"){
   
  include __DIR__.'/../src/controller/CartController.php';

  validate();
//  include __DIR__.'/../templates/Liste_utilisateur.php';

}
else if ($_SERVER['PATH_INFO']=="/supprimer"){
   
  include __DIR__.'/../src/controller/CartController.php';

  remove();
//  include __DIR__.'/../templates/Liste_utilisateur.php';

}


else if ($_SERVER['PATH_INFO']=="/add_article"){
   
    include __DIR__.'/../src/controller/Add_ArticleController.php';

    afficher_ajout_article();
  //  include __DIR__.'/../templates/Liste_utilisateur.php';

}
else if ($_SERVER['PATH_INFO']=="/enregistrer_article"){
    include __DIR__.'/../src/controller/Add_ArticleController.php';
    enregistrer_article();


}
else if ($_SERVER['PATH_INFO']=="/article"){
   
    echo "nous sommes dans la page des articles";


  //  include __DIR__.'/../templates/Liste_utilisateur.php';

}


else if ($_SERVER['PATH_INFO']=="/creer_article"){
    echo "nous sommes dans la page des articles à créé";
}



else {
    echo "page d erreur";
}
?>