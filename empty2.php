<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Empty Function</title>
</head>
<body>
  <form action="empty2.php" method="post">
    <label>username</label>
    <input type="text" name="username"></br>
    <label>password</label>
    <input type="password" name="password"></br>
    <input type="submit" name="login" value="login">
  </form>
</body>
</html>

<?php

if(isset($_POST["login"])){
  $username = $_POST["username"];
  $password = $_POST["password"];

   if(empty($username)){
     echo "username is missing";
   }else if(empty($password)){
     echo "Password is missing";
   }
   else{
     echo "Hello {$username}";
   }
}
?>