<?php
if (isset($_POST['stockidsold']) && !empty($_POST['stockidsold'])){
  if (!isset($_POST['customername']) || empty($_POST['customername'])){
    echo "Please enter customer name to whom the car was sold.";
  }
  else{
    $stockidsold = $_POST['stockidsold'];
    $customername = $_POST['customername'];
    $update = "UPDATE inventory SET sold=TRUE, instore=FALSE, onorder=FALSE WHERE stockid=$stockidsold";
    $result = @mysqli_query($dbc, $update);
    $update = "UPDATE inventory SET customername=\"$customername\" WHERE stockid=$stockidsold";
    $result = @mysqli_query($dbc, $update);

   echo "Car with stock id $stockidsold was sold to $customername.";
  }
}
?>