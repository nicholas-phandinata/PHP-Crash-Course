<?php session_start(); include "util.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Madlibs</title>
</head>
<body>
      <a href='index.php'>Go back to index page here</a>
      &nbsp;
      <a href='calculator.php'>Go to calculator page here</a>

      <br><br><hr>
      <!-- Post -->
      <form action="madlibs.php" method="POST">
           Color: <input type="text" name="color">
           <br>
           Word: <input type="text" name="word">
           <br>
           Person: <input type="text" name="person">
           <br>
           <input type="submit">
      </form>
      <?php
            $color = $_POST["color"];
            $word = $_POST["word"];
            $person = $_POST["person"];

            echo "Roses are $color <br>";
            echo "$word are blue <br>";
            echo "Joke's on $person <br>";

      ?>

      <br>
      <hr>
      <!-- Array -->
      <?php
            $names = array("john", "bruce", "tom", "kara");
            $names[10] = "smith";
            echo count($names);
      ?>

      <br>
      <hr>
      <!-- Checkbox -->
      <form action="madlibs.php" method="POST">
            Apples: <input type="checkbox" name="fruits[]" value="apples"><br>
            Oranges: <input type="checkbox" name="fruits[]" value="oranges"><br>
            Pears: <input type="checkbox" name="fruits[]" value="pears"><br>
            <input type="submit">
      </form>
      <?php
            $fruits = $_POST["fruits"];
            echo $fruits[0];
      ?>

      <br>
      <hr>
      <!-- Associative array -->
      <form action="madlibs.php" method="POST">
            Student Name: <input type="text" name="student"><br>
            <input type="submit">
      </form>
      <?php
            $grades = array("Jim"=>"A+", "Ben"=>"B-", "Marsha"=>"C+");
            echo $grades[$_POST["student"]];
      ?>

      <br>
      <hr>
      <!-- Function -->
      <?php
            function sayHi($name) {
                  echo "Hello $name from function";
            }

            sayHi("John");
      ?>

      <br>
      <hr>
      <!-- Return -->
      <form action="madlibs.php" method="POST">
            Number: <input type="number" name="number"><br>
            <input type="submit">
      </form>
      <?php
            function cube($num) {
                  return $num * $num * $num;
            }

            echo cube($_POST["number"]);
      ?>

      <br>
      <hr>
      <!-- IF Else-->
      <?php
            $isMale = true;
            $isTall = false;

            if ($isMale && $isTall){
                  echo "You are a tall male";
            } elseif ($isMale && !$isTall) {
                  echo "You are a male";
            } else {
                  echo "You are not male";
            }
      ?>

      <br>
      <hr>
      <!-- Switch statements -->
      <form action="madlibs.php" method="POST">
            What was your grade?
            <input type="text" name="grade">
            <input type="submit">
      </form>
      <?php
            $grade = strtoupper($_POST["grade"]);
            switch ($grade) { 
                  case "A":
                        echo "Amazing";
                        break;
                  case "B":
                        echo "Good";
                        break;
                  case "C":
                        echo "Fair";
                        break;
                  default:
                        echo "Invalid";
            }
      ?>

      <br>
      <hr>
      <!-- Do While loops -->
      <?php
            $index = 6;
            do{
                  echo $index;
                  $index--;
                  if ($index == 0) {
                        break;
                  }
            } while ($index <= 5);

            echo "<br>";

            $num = 6;
            while ($num >0) {
                  echo $num;
                  $num--;
            }
      ?>

      <br>
      <hr>
      <!-- For loops -->
      <?php
            // Single line comment
            /*
               Multi line comment
            */
            $luckyNum = array(4,8,12,16,20);
            
            for ($i = 1; $i <=5; $i++) {
                  echo $i;
            }
            echo "<br>";
            for ($i = 0; $i < count($luckyNum); $i++) {
                  echo $luckyNum[$i];
                  if ($i != (count($luckyNum)-1)) {
                        echo ", ";
                  }
            }
      ?>

      <br>
      <hr>
      <!-- Class & Constructor-->
      <?php
            $book1 = new Book("Harry Potter", "JK Rowling", 400); //object
            // $book1->title = "Harry Potter";
            // $book1->author = "JK Rowling";
            // $book1->pages = 400;

            $book2 = new Book("Hunger Games", "Collins", 450); //object
            // $book2->title = "Hunger Games";
            // $book2->author = "Collins";
            // $book2->pages = 450;

            $book3 = new Book("Maze Runner", "Steve", 500); //object
            // $book3->title = "Maze Runner";
            // $book3->author = "Steve";
            // $book3->pages = 500;

            // $_SESSION['book1'] = $book1->title;
            // $_SESSION['book1'] = $book1;
            // echo $book1->title;

            $bookSubject = array("title", "author", "pages");
            
            for ($i = 1; $i <= 3; $i++) {
                  $whichBook = 'book'.$i;
                  echo "$whichBook: ";
                  for ($x = 0; $x < count($bookSubject); $x++) {
                        $subject = $bookSubject[$x];
                        $bookInfo = $$whichBook->$subject;
                        if ($x < count($bookSubject)-1) {
                              echo "$bookInfo, ";
                        } else {
                              echo "$bookInfo <br>";
                        }
                  }
            }
      ?>
</body>
</html>