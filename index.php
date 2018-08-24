<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Exercice 5</title>
</head>
<body>
<a href="index.php?week=12">000</a>
  <p>
    <?php
    if (!empty($_GET['week'])){
      echo $_GET['week'] ." ";
    } else {
        echo 'Erreurs dans les paramètre';
    }
    ?>
  </p>
</body>
</html>
