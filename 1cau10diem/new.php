<?php

 function renderForm($productname, $quatity, $unitprice, $expirationdate, $error)
 {
 ?>
 <html>
 <head>
 <title>New Record</title>
 </head>
 <body>
 <?php 

 if ($error != '')
 {
 echo '<div style="padding:4px; border:1px solid red; color:red;">'.$error.'</div>';
 }
 ?> 

 <form action="" method="post">
 <div>
 <strong>Product Name: *</strong> <input type="text" name="productname" value="<?php echo $productname; ?>" /><br/>
 <strong>Quatity: *</strong> <input type="text" name="quatity" value="<?php echo $quatity; ?>" /><br/>
  <strong>Unit Price: *</strong> <input type="text" name="unitprice" value="<?php echo $unitprice; ?>" /><br/>
 <strong>Expiration Date: *</strong> <input type="text" name="expirationdate" value="<?php echo $expirationdate; ?>" /><br/>
 <p>* required</p>
 <input type="submit" name="submit" value="Submit">
 </div>
 </form> 
 </body>
 </html>
 <?php 
 }
 include('config.php');
 if (isset($_POST['submit']))
 { 
 $productname = mysql_real_escape_string(htmlspecialchars($_POST['productname']));
 $quatity = mysql_real_escape_string(htmlspecialchars($_POST['quatity']));
 $unitprice = mysql_real_escape_string(htmlspecialchars($_POST['unitprice']));
 $expirationdate = mysql_real_escape_string(htmlspecialchars($_POST['expirationdate']));
 
 if ($productname == '' || $quatity == '' || $unitprice == '' || $expirationdate == '')
 {
 $error = 'ERROR: Please fill in all required fields!';
 
renderForm($productname, $quatity, $unitprice, $expirationdate, $error);
 }
 else
 {
 mysql_query("INSERT tblproducts SET productname='$productname', quatity='$quantity', unitprice='$unitprice', expirationdate='$expirationdate'")
 or die(mysql_error()); 
 header("Location: view.php"); 
 }
 }
 else
 {
 renderForm('','','','','');
 }
?>