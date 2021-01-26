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
  
</body>

</html>