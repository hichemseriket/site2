<?php
require_once('include.php');
$var = 'About Us';
?>
<!doctype html>
<html lang="fr">
<div class ='container'>
    <head>
        <title>About Us</title>
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
        <p> nous sommes une jeun entreprise de vetements fabrique f l byadi a cote du charakat taht zebala gadgad</p>
    </body>
</div>
<?php
require_once('footer/footer.php');
?>
</html>
