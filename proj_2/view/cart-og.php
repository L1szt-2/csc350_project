<?php 
include_once('checker.php'); 
?>

<html><head><title>LOGIN WEB SESSION</title>
<link rel="stylesheet" type="text/css" href="view/css/loginsession.css" />
<link rel="stylesheet" type="text/css" href="view/css/menu.css" />
</head>
<body>

<center>	
<div style='width:600px' id="menu">
<table align=center>
<tr>
     <?php include('menu.php');?>
</tr>
</table>
</div>
</center>

<center>
<div style='text-align:left;width:600px'>
<h2>Products</h2> 

<?php
if(isset($output)) echo "$output";
?>

<a href="index.php?choice=thankyou">PROCEED TO WEB CHECKOUT<a>



</div>
</center>

</body>
</html>
