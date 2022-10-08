<?php
    require_once('include.php');
$var = 'Accueil';
?>
<!doctype html>
<html lang="fr">
<link rel="stylesheet" type="text/css" href="index.css">

<div class ='container'>
  <head>

      <title>Accueil</title>
    <?php
        require_once('head/meta.php');
        require_once('head/link.php');
        require_once('head/script.php');
    ?>
      <?php
      require_once('menu/menu.php');
      ?>
  </head>

    <h2> <?= $var ?> </h2>
          <div class="bg-image p-5 text-center shadow-1-strong rounded mb-5 text-white"
                  style="background-image: url('images/baniere.jpeg') ;">
              <h1 class="mb-3 h2">Le site de Bilel</h1>
              <p>
                  ce site on sen fou, nous on aime apprendre et vive cherif hahahahahahah
              </p>
          </div>

    <body>

    <h2>Vestes</h2>
    <p>baabbabsjdfhbvkdfhbdfgkhdfgbsdkhjfgbdkdrtzj :</p>

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

  </body>
</div>
      <?php
      require_once('footer/footer.php');
      ?>
</html>
