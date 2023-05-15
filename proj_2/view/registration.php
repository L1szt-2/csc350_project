<!DOCTYPE html>
<?php 
if(isset($message)) echo "<div style='color:red;width:330px'>".$message."</div>";
?>
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
  width: 613px;
  padding: 0;}
	.form_settings
{ margin: 15px 0 0 0;}

.form_settings p
{ padding: 0 0 0px 0;}

.form_settings span
{ float: left; 
  width: 200px; 
  text-align: left;}
  
.form_settings input, .form_settings textarea
{ padding: 5px; 
  width: 299px; 
  font: 100% arial; 
  border: 1px solid #E5E5DB; 
  background: #FFF; 
  color: #47433F;}
  
.form_settings .submit
{ font: 100% arial; 
  border: 2px; 
  width: 99px; 
  //margin: 0 0 0 212px;
  margin: 1 1 1 1;  
  height: 33px;
  padding: 2px 0 3px 0;
  cursor: pointer; 
  background: #3B3B3B; 
  color: #FFF;}

.form_settings textarea, .form_settings select
{ font: 100% arial; 
  width: 299px;}

.form_settings select
{ width: 310px;}

.form_settings .checkbox
{ margin: 4px 0; 
  padding: 0; 
  width: 14px;
  border: 0;
  background: none;}
.container
{
	text-align:center;
}
</style>
  </head>
  <body>
    <?php include('menu.php'); ?>
    <div class="container">
      <div class="col-sm-6">
        <div style="text-align: left;width: 613px; padding: 0;">
            <div id="content">
                <h1 style="font: normal 179% 'century gothic', arial, sans-serif;color: #43423F;margin: 0 0 15px 0;padding: 15px 0 5px 0;" >REGISTRATION</h1>
                <form action='index.php' method='get'>
                <input type='hidden' name='action' value='register' />
                <div class="form_settings">
                <p><span>Enter Username:</span><input class="contact" type="text" name="your_name" value="" /></p>
                <p><span>Enter Password:</span><input class="contact" type="password" name="your_email" value="" /></p>
                <p><span>Cofirm Password:</span><input class="contact" type="password" name="your_email" value="" /></p>
                <p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit" name="contact_submitted" value="submit" /></p>
                </div>
                </form>
                </div>
      </div>
    </div>

  </body>
</html>
