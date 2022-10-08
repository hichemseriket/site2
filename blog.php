<?php
    require_once('include.php');
$var = 'Blog';
?>
<!doctype html>
<link rel="stylesheet" type="text/css" href="blog.css">
<html lang="fr">
<div class ='container'>

  <head>

      <title>Blog</title>
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

    <ul class="liste-none">

        <li><a href="Modes de livraison.html">Modes de livraison</li>
        <li><a href="Retour et échange.html">Retour et échange</li>
        <li><a href="Moyens de paiement.html">Moyens de paiement</li>
        <li><a href="mentions légales.html">Mentions légales</li>

    </ul>

  </body>
</div>
  <?php
  require_once('footer/footer.php');
  ?>

</html>
