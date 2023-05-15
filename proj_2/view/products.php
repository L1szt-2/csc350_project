<?php
include_once('checker.php');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=0.8, maximum-scale=1" />
    <title>Confetti Cuisine</title>
    <link rel="stylesheet" href="view/css/bootstrap.css" />
    <link rel="stylesheet" href="view/css/confetti_cuisine.css" />
    
<style>
.title
{
    color:white;
    background-color: #2F2827;
    font-family: Arial,Helvetica,sans-serif;
    font-size: small;
    padding: .2em;
    margin-left: .5em;
    margin-bottom: .1em;
    float: right;
    text-align: left;
   width: 30%;
   font-weight: bold;
   font-variant: small-caps;
   text-align:right;
}
.left
{
	float: left;
	width: auto;
	margin-right: 10px;
}
#content
{ 
  text-align: left;
  width: 550px;
  padding: 0;
}
</style>
    
    
  </head>

  <body>
    <div id="nav" style="background:black;color:white;">
      <div class="col-sm nav-align"><h1 id="title">BMCC ELECTRONICS</h1></div>
      <div class="col-sm nav-align">
        <a href="login.html"> <span class="button">Login</span> </a>
        <a href="products.html"> <span class="button">Products</span> </a>
        <a href="contact.html"> <span class="button">Contact</span> </a>
        <a href="about.html"> <span class="button">About</span> </a>
      </div>
    </div>

  
     <center> 
        
            <div id="content">
                
              
              
                      <div style="border:solid green 1px;background:#FFFFFF;float:left">
                  <span class="left"><a href="#"><img src="images/lgtv.jpg" style="width:200px" alt="example graphic" /></a></span>
                      <div class="title">LG HDTV</div>
                      <p>
                        The best in entertainment. Access a world of movies, TV and apps, and
                        enjoy every moment in picture quality that goes beyond Full HD. With
                        X-Reality PRO, you will enjoy stunning clarity, sharpness and a more
                        refined picture. <a href="sony.html">More...</a><br />
                        <span style="float:right;text-align:left;padding:.5em;">
                      <a href="#" onclick="addItem('lgtv','1200.99','LG HDTV');">Add to Cart</a>&nbsp;&nbsp;<a href="index.php?choice=cart">Goto Cart</a>
                    </span>
                      </p>
                  </div>
                  <p style="clear:both"></p>
                  <div style="border:solid green 1px;background:#FFFFFF;float:left">
                  <div class="title">Sony HDTV</div>
                      <span class="left"><a href="#"><img src="images/sonytv.jpg" style="width:200px;" alt="example graphic" /></a></span>
                      <p>
                         Features an advanced LED Backlight Design which produces a wider color
                         range Local Dimming along with the Black Graduation Drive to delivery
                         great blacks in your video Super Bright Panel helping to brighten up
                         the content XUMO Discovery. <a href="#">More...</a><br />
                        <span style="float:right;text-align:left;padding:.5em;">
                      <a href="#"  onclick="addItem('sonytv','1500.39','SONY HDTV');">Add to Cart</a>&nbsp;&nbsp;<a href="index.php?choice=cart">Goto Cart</a>
                    </span>
                  </p>
                  </div>
              
                  <p style="clear:both"></p>
                        
                </div>
              
              </center>    
  </body>
</html>
