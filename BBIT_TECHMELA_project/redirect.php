<?php
session_start();
echo "id:";
echo $_SESSION['TID'];
echo '<pre>';
print_r($_REQUEST);
if (in_array("Credit", $_REQUEST))
  {
    echo "<h1>Congratulations ".$_SESSION['name']."!<br> Your participation is appreciated
    <br> We have sent you a payment receive mail..please check</h1>";
    
  }
  else
  {
    echo "Please Try again";
  }


?>