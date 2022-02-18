<?php include "header.php"; ?>
    <h1>Catalog</h1>
    <br />
    <br />  
    <?php foreach ($entry as $monarticle ) { ?>
    
        <div class="col-sm-6">
            <div class="card" style="width: 18rem;">
                <img src="http://localhost:3000/img/<?=$monarticle->image ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Article : <?=$monarticle->titre ?></p>

                    <form method="POST" action="add_cart">
                        <input type="hidden" value="<?=$monarticle->id ?>" name="id">
                        Quantité<input type="number" name="quantité" value=1 min=1 max=10>
                        <input type="submit" value="Ajouter au panier">
                    </form>
                </div>
            </div>
        </div>
   
    <?php } ?>   
<?php include "footer.php"; ?>