<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>PHP Calculator</title>
</head>
<body>
      <a href='index.php'>Go back to index page here</a>
      &nbsp;
      <a href='madlibs.php'>Go to madlibs page here</a>
      <br><br><hr>
      <form action="calculator.php" method="GET">
           First num: <input type="number" step="0.01" name="num1"><br>
           Operator: <input type="text" name="op"><br>
           Second num: <input type="number" step="0.01" name="num2"><br>
           <input type="submit">
      </form>
      <?php
            $num1 = $_GET["num1"];
            $num2 = $_GET["num2"];
            $op = $_GET["op"];

            if ($op == "+") {
                  echo $num1 + $num2;
            } elseif ($op == "-") {
                  echo $num1 - $num2;
            } elseif ($op == "*") {
                  echo $num1 * $num2;
            } elseif ($op == "/") {
                  echo $num1 / $num2;
            } else {
                  echo "Invalid operator";
            }
      ?>
</body>
</html>