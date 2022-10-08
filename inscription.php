<?php

    require_once('include.php');

    if(!empty($_POST)){
        extract($_POST);

        $valid = (boolean) true;

        if (isset($_POST['inscription'])){
            $pseudo= trim($pseudo);
            $mail=trim($mail);
            $confmail=trim($confmail);
            $mdp=trim($mdp);
            $confmdp=trim($confmdp);

            if (empty($pseudo)){
                $valid = false;
                $err_pseudo = 'ce champ ne peut pas etre vide';

            }else {
                $req = $DB->prepare('SELECT id 
                FROM utilisateur
                WHERE pseudo = ?');

                $req->execute(array($pseudo));

                $req = $req->fetch();

                if(isset($req['id'])){
                    $valid =false;
                    $err_pseudo = ' ce pseudo est deja pris';
                }
            }

            if (empty($mail)){
                $valid = false;
                $err_mail = 'ce champ ne peut pas etre vide';

            }elseif ($mail<>$confmail){
                $valid = false;
                $err_mail = 'Le mail est different de la confirmation';

            }else {
                $req =$DB->prepare("SELECT id 
                FROM utilisateur
                WHERE mail = ?");

                $req->execute(array($mail));
                $req = $req->fetch();

                if(isset($req['id'])){
                    $valid =false;
                    $err_mail = ' cet email est deja pris';
                }
            }


            if ($valid){
                echo 'ok';

            }else{
                echo 'nok';

            }


            // insert a notre bdd

        }
    }
?>
<!doctype html>
<html lang="fr">
<div class ='container'>

  <head>
    <title>Inscription</title>
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

        <div class ='row'>
            <div class ='col-3'></div>
                <div class ='col-6'>
                    <h2> Inscription </h2>
                    <form method ='post' >
                        <div class='mb3'>
                            <?php if (isset($err_pseudo)){echo '<div>' . $err_pseudo . '</div>';} ?>
                            <label class='form-label'> pseudo </label>
                            <input class='form-control' type='text' name='pseudo' value="<?php if (isset($pseudo)){echo $pseudo;} ?>"  placeholder='pseudo'>
                        </div>
                        <div class='mb3'>
                            <?php if (isset($err_mail)){echo '<div>' . $err_mail . '</div>';} ?>
                            <label class='form-label'> Mail </label>
                            <input class='form-control' type='email' name='mail' value="<?php if (isset($mail)){echo $mail;} ?>" placeholder='mail'>
                        </div>
                        <div class='mb3'>
                            <?php if (isset($err_confmail)){echo '<div>' . $err_confmail . '</div>';} ?>
                            <label class='form-label'> Confirmation du mail </label>
                            <input class='form-control' type='email' name='confmail' value="<?php if (isset($confmail)){echo $confmail;} ?>" placeholder='confmail'>
                        </div>
                        <div class='mb3'>
                            <label class='form-label'> Mot de passe </label>
                            <input class='form-control' type='password' name='mdp' value="<?php if (isset($mdp)){echo $mdp;} ?>" placeholder='mdp'>
                        </div>
                        <div class='mb3'>
                            <label class='form-label'> Confirmation du mot de passe </label>
                            <input class='form-control' type='password' name='confmdp'  placeholder='confmdp'>
                        </div>
                        <div class='mb3'>
                            <button type="submit" name = 'inscription' class="btn btn-primary">Inscription</button>
                        </div>
                    </form>
                </div>
           </div>
       </div>
<style>

    /* Clearfix (clear floats) */
    .row::after {
        content: "";
        clear: both;
        display: table;
    }
    /*hna tbadal le background t3 la page*/
    div {
        /*background-image: url('https://mdbcdn.b-cdn.net/img/new/slides/003.webp');*/
        background-image: url('images/blogBackground.png');
    }
</style>
       <?php
           require_once('footer/footer.php');
       ?>
  </body>
</html>
