<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>PHP - AJAX multiplication</title>
</head>

<body>
<section>

    <h1>Test des tables de multiplication</h1><br>

   <article class="accueil2">
       <a class="btn" href="index.php">ACCUEIL</a>
       <a class="btn3" href="calcul.php">ACTUALISER</a><br><br>
          </article>

<form method="post">

<h2>Choisir une table n°...</h2>

<article class="bloc1">
   <?php
      echo "<SELECT class='selectTest' name='select' value='.$i.'>";

      for($i=1; $i<=10; $i++){ 
      echo "<OPTION>$i</OPTION>";
      }

      echo "</SELECT>"; 
   ?>
      <input class="validBloc" type="submit" name="valid" value="CHOISIR">
   </form><br>
</article>

      <article class="calculquestion">
      <?php

         if(isset($_POST['valid'])){ 

         $valuRandom = rand(1,10);

         echo '<p>'.$valuRandom.' x '.$_POST['select'].' = ?'. '</p>';
         }

      ?>
      </article>

<form method="post">
<input class="enterResult" type="text" name="result" placeholder="ENTREZ LE RESULTAT">
<input type="hidden" name="randomHide" value="<?php if (isset($valuRandom)){ echo $valuRandom;} ?>">
<input type="hidden" name="valueHide" value="<?php if (isset($_POST['select'])){echo $_POST['select'];} ?>">
<input class="validBloc" type="submit" name="validResult" value="VALIDER">
</form>

<article class="resultF">
<?php

   if(isset($_POST['validResult'])){
      $randomHide = $_POST['randomHide'];
      $valueHide = $_POST['valueHide'];
      $resultUser = $_POST['result'];
      $resultTest = $randomHide * $valueHide;

      if($resultUser == $resultTest){
         echo('Bien joué !');
         }
         else{
         echo 'Non.<br> C\'était: ' .$resultTest. '<br> Pas: ' .$resultUser. '';
         }
         }
?>
</article>

</section>
        </body>
        </html>