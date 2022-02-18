<?php include "header.php"; ?>
    <h1>Add Article</h1>

    <?php if (isset($erreur_titre)) echo $erreur_titre; ?>
    <?php if (isset($erreur_description)) echo $erreur_description; ?>
    <?php if (isset($erreur_prix)) echo $erreur_prix; ?>
    <form method="POST" action="/enregistrer_article">
        <div class="mb-3 row">
        <label for="staticEmail" class="col-sm-2 col-form-label">Title</label>
        <div class="col-sm-10">
        <input type="text" name="titre"  class="form-control-plaintext" id="staticEmail"  >
        </div>
    </div>
   
            <span class="input-group-text">Description</span>
            <textarea name="description" class="form-control" aria-label="Description"></textarea>
            <span class="input-group-text">Price</span>
            <input type="number" name="prix" class="form-control-plaintext" id="prix"  >
   <div class="mb-3">
        <label for="formFileSm" class="form-label">Add image</label>
         <input class="form-control form-control-sm" id="formFileSm" type="file">
    </div>

    <button class="btn btn-primary" type="submit">Add new article</button>

    </form>
<?php include "footer.php"; ?>