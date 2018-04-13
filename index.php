<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>PHP - AJAX multiplication</title>
</head>

<body>
<section>
    
        <h1>Tables de multiplication</h1><br>

    <article class="accueil">
       <a class="btn" href="index.php">ACCUEIL</a>
       <a class="btn2" href="calcul.php">LE TEST</a><br><br>
          </article>

<article class="bloc1">
   <form action="index.php" method="post">
      <h2>Choix tables de multiplication&nbsp;</h2>

                    <?php
                    
                    echo "<SELECT name='val' value='.$i.'>";
 
                    for($i=1; $i<=10; $i++){
                              if ($i < 10){
                             echo "<OPTION>$i<br></OPTION>";
                                  }
                              else {
                             echo "<OPTION>$i<br></OPTION>";
                                   }
                                         }
               echo "</SELECT>";

                    ?>

      <input class="validBloc" type="submit" value="VALIDER" />

</article>

<article class="bloc2">
<?php

   if (isset($_POST["val"])){
      $a=trim($_POST["val"]);
      } else {
      $a=3; } // Table de 3 par défault

         echo "<h3>Table de ".$a."</h3>";
         echo "<table>";

   for($i=1;$i<11;$i++)
      {
      $r=$a*$i;
      echo "<tr><td> ".$i." </td><td> x </td><td> ".$a." </td><td> = </td><td> $r </td></tr>";
      }
      echo "</table>";
?>

</article>
   <div id="bloc3sup">
      <article class="bloc3">
      <!-- checkbox -->
      <h2>Afficher plusieurs tables</h2>
      <form action="index.php" method="post">

<?php
for ($i=1;$i<=10;$i++){

   echo("<INPUT TYPE='checkbox' NAME='num[]' VALUE='$i'/>");
   echo(" <label for='$i'>$i</label> ");
}
?>

   <input class="validBloc" type="submit" value="VALIDER" />
</form><br>

   </article>
</div>

   <article class="bloc4">

<?php

// checkbox

   if (isset($_POST["num"])) {
      $a=$_POST["num"];
      // var_dump($a);
      $length = count($a);

      for($i=0; $i<$length; $i++){
      // afficher chaque table 

echo "<h3>Table de ".$a[$i]."</h3>";
echo "<table>";

      for($j=1;$j<=10;$j++) {
      $r=$a[$i]*$j;
      echo "<tr><td> ".$j." </td><td> x </td><td> ".$a[$i]." </td><td> = </td><td> $r </td></tr>";
      }echo "</table><br><br><br>"; 
} 
} 

?>

      </form>
   </article>

</section>
</body>

</html>