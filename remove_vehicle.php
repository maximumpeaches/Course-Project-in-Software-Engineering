<?php
if (isset($_POST['stockidremove']) && !empty($_POST['stockidremove'])){
  $stockidremove = $_POST['stockidremove'];
  $delete = "DELETE FROM inventory WHERE stockid=$stockidremove";
  $result = @mysqli_query($dbc, $delete);
  echo "Car with stock id $stockidremove was removed from inventory.";
}
?>