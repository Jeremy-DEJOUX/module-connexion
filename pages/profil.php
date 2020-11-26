<?php
require_once('../configs/config.php');

if (isset($_SESSION['id'])){
  $getid = $_SESSION['id'];
  $req_user = mysqli_query($bdd, "SELECT * FROM utilisateurs WHERE id = $getid");
  $user_info = mysqli_fetch_assoc($req_user);
  if (isset($_POST['new_submit'])) {
    $error = Profil($bdd, $_POST['new_login'], $_POST['new_password'], $_POST['confirm_new_password']);
  }
?>






<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Profil</title>
    <link rel="stylesheet" href="../CSS/profil.css">
    <link rel="stylesheet" href="../CSS/header.css">
    <link rel="stylesheet" href="../CSS/footer.css">
    <script src="https://kit.fontawesome.com/56188ecd90.js" crossorigin="anonymous"></script>
</head>
<body>
    <!-- ===================================HEADER========================================== -->
<?php require_once('header.php'); ?>


<!-- =======================================MAIN=============================================== -->
    <main class="flex a_center column j_around" id="main_connexion">
      <section class="flex a_center column j_around">
        <h1>Profil de <?php echo $user_info['login']; ?></h1> <br />

        <h3>Login = <?php echo $user_info['login'];; ?></h3> <br />
        <?php if (isset($error)) { echo "<h2>$error</h2>"; }?>

        <a href="/Project Pool 2/module-connexion/pages/deconnexion.php">Se Déconnecter</a>
      </section>





        <form action="" method="post" id="formulaire_edition" class="flex a_center column j_around">
            <section class="flex column a_center">
                <label for="new_login">Nouveau Login :</label>
                <input type="text" name="new_login" value="<?php echo $user_info['login']; ?>">
            </section>



            <section class="flex j_around a_around">
                <article class="flex column j_around a_center">
                    <label for="new_password">Nouveau mot de passe</label>
                    <input type="password" name="new_password" value="">
                </article>

                <article class="flex column j_around a_center">
                    <label for="confirm_new_passsword">Confirm Password :</label>
                    <input type="password" name="confirm_new_password">
                </article>
            </section>

            <button type="submit" name="new_submit" >Mettre à jour mon profil</button>


          </form>

          <?php if ($user_info['login'] == "admin") { ?>

            <a href="/Project Pool 2/module-connexion/pages/admin.php">Page Admin</a>

          <?php } ?>


    </main>



<!-- ====================================FOOTER============================================ -->
    <?php require_once('footer.php') ?>
</body>
</html>
<?php
}

?>


<!-- <br /><b>Notice</b>:  Undefined variable: user in <b>D:\Code\xampp\htdocs\Project Pool 2\livre-or\pages\profil.php</b> on line <b>46</b><br /><br /><b>Notice</b>:  Trying to access array offset on value of type null in <b>D:\Code\xampp\htdocs\Project Pool 2\livre-or\pages\profil.php</b> on line <b>46</b><br /> -->
