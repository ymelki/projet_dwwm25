<?php
// Routeur

// echo $_SERVER['PATH_INFO'];


// si il n y a rien après l URL
if (isset($_SERVER['PATH_INFO'])==false){
//   echo "nous sommes dans la page d accueuil";
    // APPEL DU CONTROLLEUR
   include __DIR__.'/../src/controller/HomeController.php';

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