<?php
require_once('include.php');
$var = 'Veste';
?>
<!doctype html>
<html lang="fr">
<div class ='container'>
    <head>
        <title>Veste</title>
        <?php
        require_once('head/meta.php');
        require_once('head/link.php');
        require_once('head/script.php');
        ?>
        <?php
        require_once('menu/menu.php');
        ?>
    </head>
    <body>
    <h2> <?= $var ?></h2>
    <div>
        <img src="images/veste1.jpg" <a href="veste.php">
            <h3>Description</h3>
            <p>Veste d'hiver bla bla bla bla bla</p>
        <img src="images/imagklkes.jpg">
    </div>
    </body>
</div>
<?php
require_once('footer/footer.php');
?>
</html>
