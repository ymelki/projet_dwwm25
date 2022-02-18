<?php include "header.php"; ?>
    <h1>Catalog</h1>
    <br />
    <br />
    <?php foreach ($entry as $monarticle ) { ?>

        <div class="card" style="width: 18rem;">
            <img src="http://localhost:3000/img/<?=$monarticle->image ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">Article : <?=$monarticle->titre ?></p>
            </div>
        </div>

    <?php } ?>
<?php include "footer.php"; ?>