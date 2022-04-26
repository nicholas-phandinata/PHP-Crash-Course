<?php session_start(); include "util.php";?>
<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Demo PHP</title>
</head>

<body>
      <?php include "header.html" ?>
      <h3>Hello from html</h3>
      <?php
            // session_destroy();
            $myVariable = "Text from my variable";
            $countMyVariable = strlen($myVariable);
            $replaceVar = str_replace("my", "our", $myVariable);
            $numVar = 100;

            echo("Hello from PHP");
            echo("<hr>");
            echo("This is a text");
            echo(" and this is the continuation");
            echo("<br>This is a new text");
            echo("<br>");
            echo("<br>$myVariable and this number ($numVar) is also from a variable");
            echo ("<br>");
            echo strtolower("LOWER THIS <br>");
            echo strtoupper("upper this <br>");
            echo("$countMyVariable <br>");
            echo("$replaceVar <br>");
      ?>

      <form action="index.php" method="GET">
           Name: <input type="text" name="name">
           <input type="submit">
      </form>

      <br>

      <?php
            echo $_GET["name"];
            echo("<br>");
            echo("<a href='calculator.php'>Go to calculator page here</a>");
      ?>
      &nbsp;
      <a href='madlibs.php'>Go to madlibs page here</a>
      <br>

      <?php 
            $title = "Title page";
            $author = "Nicz";
            $wordcount = 100;
            include "header.php"; 

            utilFunc("Indonesia");
            echo "$constantVar <br>";

            // $test = $_SESSION['book1'];
            // print_r($test);
      ?>

      <?php include "footer.html" ?>
</body>

</html>