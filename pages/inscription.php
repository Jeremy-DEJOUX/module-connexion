<?php
require_once('../configs/config.php');

if (isset($_POST['inscription'])) {
  $error = inscription($_POST['pseudo'], $_POST['prenom'], $_POST['nom'], $_POST['password'], $_POST['confirm_password'], $bdd);
}

 ?>

 <!DOCTYPE html>
 <html lang="fr" dir="ltr">
   <head>
     <meta charset="utf-8">
     <link rel="stylesheet" href="../CSS/header.css">
     <link rel="stylesheet" href="../CSS/inscription.css">
     <link rel="stylesheet" href="../CSS/footer.css">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
     <title></title>
   </head>
   <body>
     <?php require_once('header.php') ?>

     <main id="main_inscription">
       <?php if (isset($error)) {
         // echo $error;
       } ?>
       <form class="flex column j_around a_center" action="" method="post" id="formulaire_inscriptions">
         <label for="pseudo">Pseudo:</label>
         <input type="text" name="pseudo" value="">

         <label for="prenom">Prenom:</label>
         <input type="text" name="prenom" value="">

         <label for="nom">Nom:</label>
         <input type="text" name="nom" value="">

         <label for="password">Password:</label>
         <input type="password" name="password" value="">

         <label for="confirm_password">Confirm Password:</label>
         <input type="password" name="confirm_password" value="">

         <button type="submit" name="inscription">S'inscrire</button>
       </form>
     </main>

     <?php require_once('footer.php') ?>
   </body>
 </html>
