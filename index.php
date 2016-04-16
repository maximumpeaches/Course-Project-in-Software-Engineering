<!DOCTYPE html>
<?php 
include("../../mysqli_connect.php");
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Vehicle Inventory Management System</title>

    <link rel="icon" href="nissan_logo.jpg">

    <link href="navbar.css" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <style>
      #inventory_edit{
        display:none;
      }
    </style>
</head>
<body>
<div class="container">
    <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Auto Inventory Management System</a>
          </div> <!-- /navbar-header -->
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="#" id="search_trigger">Search <span class="glyphicon glyphicon-search" aria-hidden="true"></span></a></li>
              <li id="edit_trigger"><a href="#">Edit Inventory <span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a></li>
              <li><a href="#">Contact</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li role="separator" class="divider"></li>
                  <li class="dropdown-header">Nav header</li>
                  <li><a href="#">Separated link</a></li>
                  <li><a href="#">One more separated link</a></li>
                </ul>
              </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li class="active"><a href="./">Default <span class="sr-only">(current)</span></a></li>
              <li><a href="../navbar-static-top/">Static top</a></li>
              <li><a href="../navbar-fixed-top/">Fixed top</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>

      <div id="inventory_search">
      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">
      <h1 class="text-center">Inventory Search</h1>
        <img class="center-block" style="width:120px" src="nissan_logo.jpg"/>
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

      <div id="inventory_edit">
      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">
      <h1 class="text-center">Inventory Management</h1>
        <img class="center-block" style="width:120px" src="nissan_logo.jpg"/>
        </div> <!-- /jumbotron -->

      <h3>Remove from inventory</h3>
      <form method="POST">
      <div class="form-group">
        <label for="stockid">StockID</label>
        <input class="form-control" id="stockidremove" name="stockidremove" placeholder="1, 4, 9, etc.">
      </div>
      <div class="form-group">
        <label for="name">Customer Name (Optional)</label>
        <input class="form-control" id="name" name="name" placeholder="John Smith">
      </div>
      <br/>
      <br/>
      <div>
       <button type="submit" class="btn btn-primary">Remove</button>
      </div>
    </form>
  
</div> <!-- id="inventory_search" -->
    </div> <!-- /container -->

    <!-- Bootstrap core javascript -->
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/jquery-2.2.3.min.js"></script>
    <script>
    $( "#search_trigger" ).click(function() {
      $( "#inventory_edit" ).hide();
      $( "#inventory_search" ).show();
    });
    $( "#edit_trigger" ).click(function() {
      $( "#inventory_search" ).hide();
      $( "#inventory_edit" ).show();
    });
    </script>
</body>
</html>