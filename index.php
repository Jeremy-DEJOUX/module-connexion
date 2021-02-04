<?php
require_once('configs/config.php');


?>

<!DOCTYPE html>


<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="CSS/header.css">
    <link rel="stylesheet" href="CSS/footer.css">
    <link rel="stylesheet" href="CSS/index.css">
  </head>
  <body class="flex column">
    <?php require_once('pages/header.php'); ?>

    <main class="" id="main_index">

<!--============================FRIENDS=========================  -->
      <section class="flex a_center j_center" id="Paralax_Friend">
        <h1>FRIENDS</h1>
      </section>


<!-- =======================================PERSONNAGE=========================== -->
      <section class="flex column j_around a_center" id="Personnage">
        <article class="flex j_around a_center">
          <div class="flex column a_center" id="Monica">
            <div class="">
            </div>

            <h2>Monica</h2>
          </div>

          <div class="flex column a_center" id="Chandler">
            <div class="">
            </div>

            <h2>Chandler</h2>
          </div>


          <div class="flex column a_center" id="Joey">
            <div class="">
            </div>

            <h2>Joey</h2>
          </div>

          <div class="flex column a_center" id="Phoebe">
            <div class="">
            </div>

            <h2>Phoebe</h2>
          </div>

        </article>



        <article class="flex j_around a_center">
          <div class="flex column a_center" id="Rachel">
            <div class="">
            </div>

            <h2>Rachel</h2>
          </div>

          <div class="flex column a_center" id="Ross">
            <div class="">
            </div>

            <h2>Ross</h2>
          </div>
        </article>
      </section>



<!-- =================================NEWSLETTER======================== -->
      <section class="flex column j_around a_center" id="Newsletter">
        <p><b>FRIENDS</b> est surement la série la plus connu du monde et la plus aimé. <br />
          C'est pourquoi aujourd'hui je lance mon site de <u>FunFacts</u> sur la série . <br />
          Alors pour ne manquer aucune de ces <u>FunFaaaaaactes</u> inscrivez vous à notre <i>NewsLetter</i>.
        </p>

        <form action="/Project Pool 2/module-connexion/pages/inscription.php">
          <input type="submit" value="Inscription" id="Newsletter_button"></input>
        </form>
      </section>
    </main>

    <?php require_once('pages/footer.php'); ?>

  </body>
</html>
