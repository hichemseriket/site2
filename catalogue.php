

<?php
require_once('include.php');
$var = 'Catalogue';
?>
<!doctype html>
<link rel="stylesheet" type="text/css" href="catalogue.css">

<div lang="fr"> 
<div class ='container'>

    <head>
        <title>Blog</title>
        <?php
        require_once('head/meta.php');
        require_once('head/link.php');
        require_once('head/script.php');
        ?>
    </head>

    <body>
            <?php
                require_once('menu/menu.php');
            ?>
        <h2> <?= $var ?></h2>
            <h2>Vestes</h2>
            <p>un appercu de nos produit bla bla bla bla:</p>

            <div class="row">
                <div class="column">
                    <img src="images/veste1.jpg" alt="Snow" style="width:100%">
                </div>
                <div class="column">
                    <img src="images/1.jpeg" alt="Forest" style="width:100%">
                </div>
                <div class="column">
                    <img src="images/2.jpg" alt="Mountains" style="width:80%">
                </div>
            </div>

            <h2>Sport</h2>
            <p>un appercu de nos produit de sport bla bla bla bla:</p>

            <div class="row">
                <div class="column">
                    <img src="images/download.jpg" alt="Snow" style="width:100%">
                </div>
                <div class="column">
                    <img src="images/imadddges.jpg" alt="Forest" style="width:100%">
                </div>
                <div class="column">
                    <img src="images/imageiuuks.jpg" alt="Mountains" style="width:80%">
                </div>
            </div>
    </body>
</div>
</div>
    <?php
      require_once('footer/footer.php');
    ?>
</html>
