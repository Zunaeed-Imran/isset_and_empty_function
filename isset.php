<?php
// isset() = return true if a variable is declared and not null
// empty() = returns true if a variable is not declared, false, null, ""


// $username = "Imran";
// $username = null;
// echo isset($username);

// $username = false;
// $username = true;
   $username = null;
if(isset($username)){
  echo "This variable is set";
}else{
  echo "This variable is not set";
}

?>