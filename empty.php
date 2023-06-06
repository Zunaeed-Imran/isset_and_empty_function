<?php
// isset() = return true if a variable is declared and not null
// empty() = returns true if a variable is not declared, false, null, ""



$username = "Imran";
// $username = "";
// $username = true;
// $username = false;
// $username = null;

if(empty($username)){
  echo "this Variable is empty";
}else{
  echo "this variable os NOT empty";
}

?>