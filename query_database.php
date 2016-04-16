<?php


$s = "";
$haveSeenACondition = false;
function add_to_s($name, $value){
  global $s, $haveSeenACondition;
  if ($haveSeenACondition){
    $s .= " AND ";
  } else{
    $haveSeenACondition = true;
  }
  $s .= "$name=\"$value\"";
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
  add_to_s('model', $_POST['model']);
}
if (isset($_POST['year']) && !empty($_POST['year'])){
  add_to_s('year', $_POST['year']);
}

if ($haveSeenACondition){

  $query = "SELECT * FROM inventory WHERE $s";

  $result = @mysqli_query($dbc, $query); // Run the query

  if (!$result){
    echo "No search results found.";
    exit();
  }
	?>
	<br/>
	<br/>
	<p class="lead text-center">Query results</p> 
  <?php
         while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
          ?>
    <div class="table-responsive">
	<table class="table table-striped table-bordered table-hover">
  	     <tr>
            <td>Stock ID</td>
  	        <td>Model</td>
  	        <td>Year</td>
            <td>Warranty</td>
            <td>Customer Name</td>
            <td>Arrival Date</td>
            <!-- May need Date Sold column -->
            <td>Scheduled Maintenance</td>
            <td>Unscheduled Maintenance</td>
            <td>Status</td>
            <td>Engine Capacity</td>
         </tr>
          <tr>
            <td><?= $row['stockid'] ?></td>
            <td><?= $row['model'] ?></td>
            <td><?= $row['year'] ?></td>
            <td><?= $row['warranty'] ?></td>
            <td><?= $row['customername'] ?></td>
            <td><?= $row['arrivaldate'] ?></td>
            <td><?= $row['sched_maintenance'] ?></td>
            <td><?= $row['unsched_maintenance'] ?></td>
            <td><?php 
            if ($row['instore'] && $row['sold'] || $row['instore'] && $row['onorder'] || $row['sold'] && $row['onorder']) 
              echo "Invalid data";
            else if ($row['instore'])
              echo "In store";
            else if($row['onorder'])
              echo "On order";
            else if($row['sold'])
              echo "Sold";
             ?></td>
            <td><?= $row['enginecapacity'] ?></td>
         </tr>
         <tr>
            <td>Transmission</td>
            <td>Fuel Economy</td>
            <td>Horsepower</td>
            <td>Tank Capacity</td>
            <td>Cylinder Config</td>
            <td>Power Steering</td>
            <td>Anti-lock Brakes</td>
            <td>Airbags</td>
            <td>On-board Computer</td>
            <td>Service Indicator</td>
          </tr>
          <tr>
            <td><?= $row['transmission'] ?></td>
            <td><?= $row['fueleconomy'] ?></td>
            <td><?= $row['horsepower'] ?></td>
            <td><?= $row['tankcapacity'] ?></td>
            <td><?= $row['cylinderconfig'] ?></td>
            <td><?php if($row['powersteering']) echo "Yes"; else if(isset($row['powersteering'])) echo "No"; ?></td>
            <td><?php if($row['antilockbrakes']) echo "Yes"; else if(isset($row['antilockbrakes'])) echo "No"; ?></td>
            <td><?= $row['airbags'] ?></td>
            <td><?php if($row['onboardcomputer']) echo "Yes"; else if(isset($row['onboardcomputer'])) echo "No"; ?></td>
            <td><?php if($row['serviceindicator']) echo "Yes"; else if(isset($row['serviceindicator'])) echo "No"; ?></td>
         </tr>
         <tr>
            <td>GPS</td>
            <td>Color</td>
            <td>Adjustable Seats</td>
            <td>Interior</td>
            <td>AM/FM Stereo</td>
            <td>Bluetooth</td>
            <td>Keyless Entry</td>
            <td>Cruise Control</td>
            <td>Push Button Start</td>
            <td>Sport Package</td>
            <td>Premium Package</td>
         </tr>
         <tr>
            <td><?php if($row['gps']) echo "Yes"; else if(isset($row['gps'])) echo "No"; ?></td>
            <td><?= $row['color'] ?></td>
            <td><?php if($row['adjustableseats']) echo "Yes"; else if(isset($row['adjustableseats'])) echo "No"; ?></td>
            <td><?= $row['interior'] ?></td>
            <td><?php if($row['amfmstereo']) echo "Yes"; else if(isset($row['amfmstereo'])) echo "No"; ?></td>
            <td><?php if($row['bluetooth']) echo "Yes"; else if (isset($row['bluetooth'])) echo "No"; ?></td>
            <td><?php if($row['keyless']) echo "Yes"; else if(isset($row['keyless'])) echo "No"; ?></td>
            <td><?php if($row['cruisecontrol']) echo "Yes"; else if(isset($row['cruisecontrol'])) echo "No"; ?></td>
            <td><?php if($row['pushbuttonstart']) echo "Yes"; else if(isset($row['pushbuttonstart'])) echo "No"; ?></td>
            <td><?php if($row['sportpackage']) echo "Yes"; else if(isset($row['sportpackage'])) echo "No"; ?></td>
            <td><?php if($row['premiumpackage']) echo "Yes"; else if(isset($row['premiumpackage'])) echo "No"; ?></td>
          </tr>
    </table>
    </div>
    <br/>
    <br/>
             <?php 
         } 
         ?>
<?= mysqli_free_result($result); // Free up the resources ?>
<?php
} 
?>