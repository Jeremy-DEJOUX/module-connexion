<?php
  require_once('../configs/config.php');
if ($_SESSION['login'] == 'admin') {
  $query = mysqli_query($bdd, "SELECT * FROM utilisateurs");
  $id = mysqli_fetch_all($query);
?>


<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../CSS/header.css">
    <link rel="stylesheet" href="../CSS/footer.css">
    <link rel="stylesheet" href="../CSS/admin.css">
    <title></title>
  </head>
  <body>
    <?php require_once('header.php'); ?>


    <main>
      <table>
          <thead>
              <tr>
                  <th>ID</th>
                  <th>Login</th>
                  <th>Prenom</th>
                  <th>Nom</th>
                  <th>MDP</th>
              </tr>
          </thead>

          <tbody>
              <?php
                  foreach ($id as $key){
                      echo "<tr>";
                      foreach ($key as $value){
                          echo "<td>$value</td>";
                      }
                      echo "</tr>";
                  }
              ?>
          </tbody>
      </table>
    </main>


      <?php require_once('footer.php'); ?>
  </body>
</html>
<?php
}
?>
