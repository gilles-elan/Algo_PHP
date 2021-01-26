<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>L'algo c'est la vie</title>
</head>

<body>
  <h2>Exercice 1</h2>
  <?php
  $phrase = "Notre formation DL commence aujourd'hui";
  echo '<p>La phrase &laquo; '.$phrase.' &raquo; contient '.strlen($phrase).' caractères.</p>';
  ?>
  <h2>Exercice 2</h2>
  <?php
  echo '<p>La phrase &laquo; '.$phrase.' &raquo; contient '.str_word_count($phrase).' mots.</p>';
  ?>
  <h2>Exercice 3</h2>
  <?php 
  $newPhrase = str_replace("aujourd'hui", "demain", $phrase);
  echo "Voici la nouvelle phrase: $newPhrase";
  ?>
  <h2>Exercice 4</h2>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
    <input type="text" name="phrase" id="phrase" placeholder="Donnez une phrase">
    <input type="submit" value="Est-ce un palindrome?">
  </form>
  <?php
    // function palindrome($number){
    //   $temp = $number;
    //   $new = 0;
    //   while(floor($temp)){
    //     var_dump(floor($temp));
    //     $d = $temp % 10;
    //     var_dump($d);
    //     $new = $new * 10 + $d;
    //     $temp = $temp / 10;
    //   }
    //   if($new == $number){
    //     return 1;
    //   } else {
    //     return 0;
    //   }
    // }
    // $original = "Engage le jeu que je le gagne";
    // if(palindrome($original)){
    //   echo "La phrase est un palidrome";
    // } else {
    //   echo "La phrase n'est pas un palindrome";
    // }
    
    function isPalindrome($phrase){
      $phrase = strtolower(str_replace(" ", "", $phrase));
      $reverse = strrev($phrase);
      if($reverse === $phrase){
        return "<p>Cette phrase est un palindrome</p>";
      } else {
        return "<p>Cette phrase n'est pas un palindrome</p>";
      }
    }

    if(isset($_GET['phrase'])){
      echo isPalindrome($_GET['phrase']);
    }

  ?>

  <h2>Exercice 5</h2>
  <form action="index.php" method="GET">
    <label for="conversion">Valeur en francs à convertir</label><br>
    <input type="number" name="conversion" id="conversion"><br>
    <input type="submit" value="Convertir">
  </form>
  <?php
    //Vérifier si $_GET['conversion'] existe et qu'il a une valeur différente de ""
    // if(isset($_GET['conversion']) && $_GET['conversion'] != ""){
    //   $valeurFrancs = $_GET['conversion'];
    // } else {
    //   $valeurFrancs = 0;
    // }
    //Condition ternaire
    $valeurFrancs = (isset($_GET['conversion']) && $_GET['conversion'] != "") ? $_GET['conversion'] : 0;
    $valeurTauxeuros = 6.55957;
    $valeurSommeuros= $valeurFrancs/$valeurTauxeuros;
    echo "<p>Montant en francs: " . $valeurFrancs . "<br>";
    echo $valeurFrancs . " francs = " . round($valeurSommeuros, 2) . "€</p>";
    // echo $valeurFrancs . " francs = " . number_format($valeurSommeuros, 2) . "€</p>";

  ?>
  <h2>Exercice 6</h2>
  <?php
  $prixUnitaire = 9.99;
  $quantite = 5;
  $tauxTVA = 0.2;
  $montantTotalTTC = $prixUnitaire * $quantite +($prixUnitaire * $quantite * $tauxTVA);
  // $montantTotal = $prixUnitaire * $quantite * (1 + $tauxTVA);

  echo '<p>Quantité : '.$quantite.' </p>';
  echo '<p>Le prix unitaire est de : '.$prixUnitaire.' € </p>';
  echo '<p>Le taux de la TVA est de : '. $tauxTVA.' </p>';
  echo '<p>Le montant de la facture à régler est de : ' . $montantTotalTTC.' € </p>';
  ?>

  <h2>Exercice 7</h2>
<?php
  // $age = 8 ;
  // if ($age >= 12) {​​
  //   echo "L’enfant qui a ", $age, " ans appartient à la catégorie Cadet";
  // } ​​elseif ($age >= 10){​​
  //   echo "L’enfant qui a ", $age, " ans appartient à la catégorie Minime";
  // }​​ elseif ($age >= 8){​​
  //   echo "L’enfant qui a ", $age, " ans appartient à la catégorie Pupille";
  // } ​​elseif ($age >= 6){​​
  //   echo "L’enfant qui a ", $age, " ans appartient à la catégorie Poussin";
  // } ​​else {​​
  //   echo "L’enfant qui a ", $age, " ans est trop jeune pour appartenir à une catégorie";
  // }​​​​
?>

  <h2>Exercice 8</h2>
  <?php
    // $nb = 8;
    // echo "<p>Table de " . $nb . " :<br>";
    // for ($i = 1; $i <= 10; $i++) {​​
    //     echo $i . " x " . $nb . " = " . $nb * $i . "<br>";
    // }​​

    //Solution bis
    // $nbre2 = 3;
    // $i = 1;
    // echo "<br>Table de " . $nbre2 . " :<br>";
    // while ($i <= 10) {​​
    //   echo $i . " x " . $nbre2 . " = " . $nbre2 * $i . "<br>";
    //   $i++;
    // }​​
  ?>

  <h2>Exercice 9</h2>
  <?php

  // EX 9

  // $age = 18;
  // $sexe = "H";
  // echo "Age :", $age."<br>";
  // echo "Sexe :", $sexe."<br>";
  // if (($age >= 18 && $age <= 35 && $sexe == "F") || ($age > 20 && $sexe == "H")){​​
  //   echo "La personne est imposable.";
  // }​​ else {​​ 
  //   echo "La personne n'est pas imposable." ;
  // }​​

  ?>

  <h2>Exercice 10</h2>
  <?php
  $prix = 152;
  $montantVerse = 200;
  $reste = $montantVerse - $prix;
  ​
  echo "Montant à payer : ". $prix ."<br/>";
  echo "Montant versé : " .$montantVerse."<br/>";
  echo "Reste à payer : " .$reste."<br/>";
  
  $billetDix = 0;
  $billetCinq = 0;  
  $pieceDeux = 0;  
  $pieceUn = 0;
  
  //Solution 1 avec des while
  // while($reste>=10)
  // {​​
  //   $reste = $reste - 10;
  //   $billetDix = $billetDix + 1;
  // }​​

  // while($reste>=5)
  // {​​
  //     $reste = $reste - 5;
  //     $billetCinq = $billetCinq + 1;
  // }​​

  // while($reste>=2)
  // {​​
  //     $reste = $reste - 2;
  //     $pieceDeux = $pieceDeux + 1;
  // }​​

  // while($reste>=1)
  // {​​
  //     $reste = $reste - 1;
  //     $pieceUn = $pieceUn + 1;
  // }​​
  // echo "Rendu de monnaie : "."<br/>";  
  // echo $billetDix . " billets de 10€, " . $billetCinq." billets de 5€, ". $pieceDeux. "pièce(s) de 2€, " .$pieceUn. "pièce(s) de 1€."."<br/>";

  //Solution 2
  function renduMonnaie($coupure){
    $monnaie = floor($reste / $coupure, 0); // 48 / 10 => 4.8 -> arrondi inf -> 4
    $reste = $reste % $coupure;  // 48 / 10 => 8
    return $monnaie;
  }
  
  echo "Rendu de monnaie : "."<br/>";  
  echo renduMonnaie(10) . " billets de 10€, " . renduMonnaie(5)." billets de 5€, ". renduMonnaie(2). "pièce(s) de 2€, " .renduMonnaie(1). "pièce(s) de 1€."."<br/>";


  
  ?>
</body>

</html>