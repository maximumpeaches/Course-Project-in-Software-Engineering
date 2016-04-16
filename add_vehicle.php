<?php
$cols = "";
$vals = "";
$seenCondition = false; // this variable is true when we've already added one variable from POST to our SQL string
function add_to($name, $value){
  global $cols, $vals, $seenCondition;
  if ($seenCondition){
  	$cols .= ", $name";
  	$vals .= ", '$value'";
  } else{
  	$cols .= " ($name, instore, onorder, sold";
  	$vals .= " ('$value', TRUE, FALSE, FALSE";
    $seenCondition = true;
  }
}

function check($value){
  if (isset($value) && !empty($value)){
    return true;
  }
  else{
    return false;
  }
}
if (isset($_POST['model']) && !empty($_POST['model'])){
  add_to('model', $_POST['model']);
}
if (isset($_POST['year']) && !empty($_POST['year']) && is_numeric($_POST['year'])){
  add_to('year', $_POST['year']);
}
if (isset($_POST['warranty']) && !empty($_POST['warranty'])){
  add_to('warranty', $_POST['warranty']);
}
if (isset($_POST['enginecapacity']) && !empty($_POST['enginecapacity']) && is_numeric($_POST['enginecapacity'])){
  add_to('enginecapacity', $_POST['enginecapacity']);
}

if ($seenCondition){
	$cols .= ") ";
	$vals .= ") ";

  $insert = "INSERT INTO inventory $cols VALUES $vals ";
echo $insert;
  $result = @mysqli_query($dbc, $insert); // Run the query
}
?>