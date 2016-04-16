<?php include("header.php"); ?>
      <div id="inventory_edit">
      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">
      <h1 class="text-center">Inventory Management</h1>
        <img class="center-block" style="width:180px" src="toyota_logo.png"/>
        </div> <!-- /jumbotron -->

        <h3>Car Was Sold</h3>
      <form method="POST">
      <div class="form-group">
        <label for="stockidsold">StockID</label>
        <input class="form-control" id="stockidsold" name="stockidsold" placeholder="1, 4, 9, etc.">
      </div>
      <div class="form-group">
        <label for="customername">Customer Name</label>
        <input class="form-control" id="customername" name="customername" placeholder="John Smith">
      </div>
      <div>
       <button type="submit" class="edit-trigger btn btn-primary">Update</button>
      </div>
    </form>
    <?php include("vehicle_sold.php") ?>

      <h3>Remove from inventory</h3>
      <form method="POST">
      <div class="form-group">
        <label for="stockidremove">StockID</label>
        <input class="form-control" id="stockidremove" name="stockidremove" placeholder="1, 4, 9, etc.">
      </div>
      <div>
       <button type="submit" class="edit-trigger btn btn-primary">Remove</button>
      </div>
    </form>
    <?php include("remove_vehicle.php") ?>

    <h3>Car Arrived</h3>
      <form method="POST">
      <div class="form-group">
        <label for="model">Model</label>
        <input class="form-control" id="model" name="model" placeholder="Sentra, Pathfinder, etc.">
      </div>
      <div class="form-group">
        <label for="year">Year</label>
        <input class="form-control" id="year" name="year" placeholder="Ex: 2004">
      </div>
      <div class="form-group">
        <label for="warranty">Warranty</label>
        <input class="form-control" id="warranty" name="warranty" placeholder="">
      </div>
      <div class="form-group">
        <label for="enginecapacity">Engine Capacity</label>
        <input class="form-control" id="enginecapacity" name="enginecapacity" placeholder="">
      </div>
<!-- unfinished parameters:
    transmission CHAR(255),
    fueleconomy CHAR(255),
    horsepower SMALLINT,
    tankcapacity DECIMAL(4,2),
    cylinderconfig CHAR(255),
    #Features
    powersteering BOOLEAN,
    antilockbreaks BOOLEAN,
    airbags CHAR(255),
    onboardcomputer BOOLEAN,
    serviceindicator BOOLEAN,
    gps CHAR(255),
    color CHAR(255),
    adjustableseats BOOLEAN,
    interior CHAR(255),
    amfmstereo BOOLEAN,
    bluetooth BOOLEAN,
    keyless BOOLEAN,
    cruisecontrol BOOLEAN,
    pushbuttonstart BOOLEAN,
    sportpackage BOOLEAN,
    premiumpackage BOOLEAN
-->
      <div>
       <button type="submit" class="edit-trigger btn btn-primary">Add</button>
      </div>
    </form>
    <?php include("add_vehicle.php"); ?>
  
</div> <!-- id="inventory_search" -->
<?php include("footer.php"); ?>