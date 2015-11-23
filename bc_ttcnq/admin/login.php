<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ADMINISTRATOR LOGIN - Vi Tinh Hong Ngoc</title>
<style type="text/css">
body{ font-family: Georgia, serif;  color: #3a3a3a; margin: 0; padding: 0; background: url(images/login-page-bg.jpg) no-repeat top center; background-color: #cdcdcd }

.clear{ clear: both; }

form{ width: 406px; margin: 170px auto 0; }

legend{ display: none; }

fieldset			{ border: 0; }

label{ width: 115px; text-align: right; float: left; margin: 0 10px 0 0; padding: 9px 0 0 0; font-size: 16px; }

input{ width: 220px; display: block; padding: 4px; margin: 0 0 10px 0; font-size: 18px;
	  color: #3a3a3a; font-family: Georgia, serif;}
input[type=checkbox]{ width: 20px; margin: 0; display: inline-block; }
	  
.button{ background: url(images/button-bg.gif) repeat-x top center; border: 1px solid #999;
	  -moz-border-radius: 5px; padding: 5px; color: black; font-weight: bold;
	  -webkit-border-radius: 5px; font-size: 13px;  width: 70px; }
.button:hover		{ background: white; color: black; }

</style>
</head>
<body onload="onload();">
<form id="login-form" method="POST" action="kiemtra.php">
   <fieldset>
		
			<legend>Log in</legend>
			
			<label for="login">Username:</label>
			<input type="text" id="user" name="user"/>
			<div class="clear"></div>
			
			<label for="password">Password:</label>
			<input type="password" id="pass" name="pass"/>
			<div class="clear"></div>
			
			<div class="clear"></div>
			
			<br />
			
			<input type="submit" style="margin: -20px 0 0 287px;" class="button" name="commit" value="Log in"/>	
		</fieldset>
</form>   
</body>
</html>