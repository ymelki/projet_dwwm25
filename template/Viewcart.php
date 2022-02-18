<?php include "header.php"; ?>
    <h1>Mon panier</h1>
    <br /> 

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
    </tr>
  </thead>
  <tbody>
      
  <?php foreach ($moncart as $entry ) { ?>
    <tr>
      <th scope="row"><?=$entry->article->id; ?></th>
      <td><?=$entry->article->titre; ?></td>
      <td><?=$entry->article->description; ?></td>
      <td><?=$entry->article->prix; ?></td>
      <td><?=$entry->article->image; ?></td>
      <td><?=$entry->quantite; ?></td>
      <td><?=$entry->prix_total; ?></td> 
    </tr> 
    <?php } ?>   

  </tbody>
</table>

<?php include "footer.php"; ?>