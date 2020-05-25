<?php
// Lors d'un calcul, bien prendre en compte la priorité des calcul en utilisant les ().
$number = 140;
// On ajoute ou divise une quantité la variable $number2 en mettant $number2 = $number2 + (ou /) et la quantité voulu
$number2 = 140;
$number2 = $number2 + 30;
$number2 = $number2 / 2;
// On ajoute ou divise une quantité la variable $number3 en mettant $number3 + (ou /)= et la quantité voulu
$number3 = 140;
$number3 += 30;
$number3 /= 2;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>Exercice 6 - Php</title>
</head>
<body>
  <p>
    <?php
    echo ($number + 30) / 2;
    ?>
  </p>
  <!-- on peut remplacer un echo par un égal pour faire une version racourci du php-->
  <p><?= $number2; ?></p>
  <p><?php echo $number3; ?></p>
</body>
</html>
