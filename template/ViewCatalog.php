<?php include "header.php"; ?>
    <h1>Catalog</h1>
    <br />
    <br />
    <?php foreach ($entry as $monarticle ) { ?>
        Article : <?=$monarticle->titre ?> <br /><hr>
    <?php } ?>
<?php include "footer.php"; ?>