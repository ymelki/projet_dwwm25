<?php include "header.php"; ?>
    <h1>Mon panier</h1>
    <br /> 


    <a href="/clear_cart"><button type="button" class="btn btn-primary">Vider le panier</button></a>

   <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Titre</th>
      <th scope="col">Description</th>
      <th scope="col">Prix</th>
      <th scope="col">image</th>
      <th scope="col">Quantité</th>
      <th scope="col">Prix_total</th>
      <th scope="col">Supprimer</th>
    </tr>
  </thead>
  <tbody>
      
  <?php foreach ($moncart->row_cart as $entry ) { ?>
    <tr>
      <th scope="row"><?=$entry->article->id; ?></th>
      <td><?=$entry->article->titre; ?></td>
      <td><?=$entry->article->description; ?></td>
      <td><?=$entry->article->prix; ?></td>
      <td><img src=http://localhost:3000/img/<?=$entry->article->image; ?> width="50px"></td>
      <td><?=$entry->quantite; ?></td>
      <td><?=$entry->prix_total; ?></td> 
      <td><a href="/supprimer?id=<?=$entry->article->id; ?>">Supprimer</a></td> 
    </tr> 
    <?php } ?>   

  </tbody>
</table>
Total : <?=$moncart->total ?>

<a href="/order"><button type="button" class="btn btn-primary">Passer la commande ! </button></a>

<?php include "footer.php"; ?>