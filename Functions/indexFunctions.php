<?php
function choosePayoff(){
  if($_GET ["page"] == "content"){
      include_once 'Payoff.php';
    } else{
      include_once 'Payoff_second.php';
    }
}
 ?>
