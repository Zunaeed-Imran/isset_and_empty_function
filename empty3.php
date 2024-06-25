<?php
// Practice empty without using HTML form



$username = "imran";
$password = 1234;

if (empty($username)) {
  echo "Username is missing";
} elseif (empty($password)) {
  echo "password is missing";
} else {
  echo "Hello " . $username;
}


?>