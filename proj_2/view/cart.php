<!DOCTYPE html>
<?php include_once ('checker.php'); ?>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=0.8, maximum-scale=1" /> 
    <title>Confetti Cuisine</title>
    <link rel="stylesheet" type="text/css" href="view/css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="view/css/confetti_cuisine.css" />
    <style type="text/css">
		#content
{ text-align: left;
  width: 500px;
  padding: 0;}
  table{border:solid 3px #ed4a0f; font:1.2em monospace;}
  table th,td{border:solid .5px #ed4a0f;}
  table th{background-color:black;color:white; text-align:center}
  table input[type="submit"]{background-color:#ed4a0f;color:white;}
</style>
  </head>
  <body>
   <?php include('menu.php'); ?>
<center>
    <div id="content">
        <div style="text-align: left; padding: 0;">
            <div id="content">
                <h1 style="font: normal 179% 'century gothic', arial, sans-serif;color: #43423F;margin: 0 0 15px 0;padding: 15px 0 5px 0;" >CART</h1>
                <?php
                  if(isset($output)) echo "$output";
                ?>
                </div>
      </div>
    </center>
  </body>
</html>
