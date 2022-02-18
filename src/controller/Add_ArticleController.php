<?php

function afficher_ajout_article(){
    // affiche une vue
    include __DIR__.'/../../template/ViewAddArticle.php';
}


function enregistrer_article(){
    
    var_dump($_FILES);
     if(isset($_FILES['photo'])){
        $tmpName = $_FILES['photo']['tmp_name'];
        $name = $_FILES['photo']['name'];
        $size = $_FILES['photo']['size'];
        $error = $_FILES['photo']['error'];

        move_uploaded_file($tmpName, $_SERVER["DOCUMENT_ROOT"]."/img/".$name);
    }


    // recuperer  l entité article
    include __DIR__.'/../entity/Article.php';

    // Si on a le titre qui est vide ou ...
    // alors on renvoie une vue et on arrette

    if ($_POST['titre']==""){
        $erreur_titre="<br /> - Vous n'avez pas entré de titre";
   
    }

    if ($_POST['description']==""){
        $erreur_description="<br /> - Vous n'avez pas entré de Description";
   
    }

    if ($_POST['prix']==""){
        $erreur_prix="<br />     - Vous n'avez pas entré de Prix";
    }

    if (  ($_POST['titre']=="") || ($_POST['description']=="") || ($_POST['prix']=="")  ) {
       
        include __DIR__.'/../../template/ViewAddArticle.php';
        return ;
    }

    $entry = new Article;
    $entry->titre = $_POST['titre'];
    $entry->description = $_POST['description'];
    $entry->prix =$_POST['prix'];
    $entry->image = $name;
    $entry->save();


    // Afficher la vue
    include __DIR__.'/../../template/ViewSaveArticle.php';
    
}
