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

<img src='view/images/lgtv.jpg' width='200px' />
 <form action='index.php' method='get'>
	 <input type='hidden' name='item' 	value='lgtv' />
	 <input type='hidden' name='price'  value='1200.99' />
	 <input type='hidden' name='choice' value='products' />
	 <input type='submit' name='choice2' value='addToCart' />
 </form>

<img src='view/images/sonytv.jpg' width='200px' />
 <form action='index.php' method='get'>
	 <input type='hidden' name='item' 	value='sonytv' />
	 <input type='hidden' name='price'  value='1500.39' />
	 <input type='hidden' name='choice' value='products' />
	 <input type='submit' name='choice2' value='addToCart' />
 </form>

<a href="index.php?choice=cart">PROCEED TO WEB CART<a>



</div>
</center>

</body>
</html>
