<?php

$nameErr = $emailErr  = "";
$name = $email  = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "*Name is required";
  } else {
    $name = $_POST["name"];
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "*Email is required";
  } else {
    $email = $_POST["email"];
  }
}
?>

<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color:red;}
</style>
</head>
<body>

<form method="post" action="<?php echo ($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <span class="error"> <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email">
  <span class="error"> <?php echo $emailErr;?></span>
  <br> <br>
  <input type="submit">
  <br>
  
</form>
</body>
</html