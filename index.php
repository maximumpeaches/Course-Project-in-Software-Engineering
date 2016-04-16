<?php include("header.php"); ?>
      <div id="inventory_search">
      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">
      <h1 class="text-center">Inventory Search</h1>
        <img class="center-block" style="width:180px" src="toyota_logo.png"/>
        </div> <!-- /jumbotron -->
        <form method="POST">
		  <div class="form-group">
		    <label for="model">Model</label>
		    <input class="form-control" id="model" name="model" placeholder="Sentra, Pathfinder, etc.">
		  </div>
		  <div class="form-group">
		    <label for="year">Year</label>
		    <input class="form-control" id="year" name="year" placeholder="Ex: 2004">
		  </div>
      <label for="status">Status</label><br/>
      <label class="radio-inline">
        <input type="radio" name="status" id="sold" value="sold"> Sold
      </label>
      <label class="radio-inline">
        <input type="radio" name="status" id="onorder" value="onorder"> On order
      </label>
      <label class="radio-inline">
        <input type="radio" name="status" id="instore" value="instore"> In store
      </label>
      <br/>
      <br/>
      <div>
		    <button type="submit" class="btn btn-primary">Search Inventory</button>
		  </div>
    </form>
    <?php
  include("query_database.php");
?>
</div> <!-- id="inventory_search" -->
<?php include("footer.php"); ?>