<?php
require_once("../configs/config.php");
if (isset($_POST['connexion'])) {
  $error = connexion($_POST['pseudo'], $_POST['password'], $bdd);
}
?>






<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
    <link rel="stylesheet" href="../CSS/connexion.css">
    <link rel="stylesheet" href="../CSS/header.css">
    <link rel="stylesheet" href="../CSS/footer.css">
    <script src="https://kit.fontawesome.com/56188ecd90.js" crossorigin="anonymous"></script>
</head>
<body>
    <!-- ===================================HEADER========================================== -->
    <?php require_once('header.php'); ?>


<!-- =======================================MAIN=============================================== -->
    <main class="flex column a_center" id="main_connexion">
        <h1>Connexion</h1>
        <?php if (isset($error)) { echo "<h2>$error</h2>"; }?>

        <form action="connexion.php" method="post" id="connexion_formulaire" class="flex column a_center">
            <section class="flex column a_center">
                <label for="pseudo">Login :</label>
                <input type="text" name="pseudo">
            </section>

             <section class="flex column a_center">
                    <label for="password">Password :</label>
                    <input type="password" name="password">
            </section>

            <button type="submit" name="connexion">Connexion</button>
        </form>
    </main>



<!-- ====================================FOOTER============================================ -->
    <?php require_once('footer.php') ?>
</body>
</html>
