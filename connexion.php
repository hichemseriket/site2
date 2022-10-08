<?php
    require_once('include.php');
$var = 'Connexion'
?>
<!doctype html>
<html lang="fr">
<div class ='container'>

  <head>
     <title><?php $var ?></title>
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
       <div class ='row'>
           <div class ='col-3'></div>
           <div class ='col-6'>
               <h2> Connexion </h2>
               <form method ='post' >
                   <div class='mb3'>
                       <?php if (isset($err_pseudo)){echo '<div>' . $err_pseudo . '</div>';} ?>
                       <label class='form-label'> pseudo </label>
                       <input class='form-control' type='text' name='pseudo' value="<?php if (isset($pseudo)){echo $pseudo;} ?>"  placeholder='pseudo'>
                   </div>
                   <div class='mb3'>
                       <?php if (isset($err_mail)){echo '<div>' . $err_mail . '</div>';} ?>
                       <label class='form-label'> Mot de passe </label>
                       <input class='form-control' type='password' name='mdp' value="<?php if (isset($mdp)){echo $mdp;} ?>" placeholder='mail'>
                   </div>
                   <div class="mb3">
                       <button type="submit" name = 'connexion' class="btn btn-secondary">envoie</button>
                   </div>
               </form>
           </div>
       </div>
  </body>
</div>
<?php
require_once('footer/footer.php');
?>
</html>
