<?php


// recuperer  l entité article
include __DIR__.'/../entity/Article.php';

// GET ALL ARTICLES
$entry = Article::all();


// affiche une vue
include __DIR__.'/../../template/ViewCatalog.php';

