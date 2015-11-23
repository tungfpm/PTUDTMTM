<?php

 function renderForm($id, $productname, $quatity, $unitprice, $expirationdate, $error)
 {
 ?>

 <html>
 <head>
 <title>Edit Record</title>
 </head>
 <body>
 <?php 

 if ($error != '')
 {
 echo '<div style="padding:4px; border:1px solid red; color:red;">'.$error.'</div>';
 }
 ?> 
 
 <form action="" method="post">
 <input type="hidden" name="id" value="<?php echo $id; ?>"/>
 <div>
 <p><strong>ID:</strong> <?php echo $id; ?></p>
 <strong>Product Name: *</strong> <input type="text" name="productname" value="<?php echo $productname; ?>" /><br/>
 <strong>Quatity: *</strong> <input type="text" name="quatity" value="<?php echo $quatity; ?>" /><br/>
  <strong>Unit Price: *</strong> <input type="text" name="unitprice" value="<?php echo $unitprice; ?>" /><br/>
 <strong>Expiration Date: *</strong> <input type="text" name="expirationdate" value="<?php echo $expirationdate; ?>" /><br/>
 <p>* Required</p>
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
 
 if (is_numeric($_POST['id']))
 {

 $id = $_POST['id'];
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

 mysql_query("UPDATE tblproducts SET productname='$productname', quatity='$quatity', unitprice='$unitprice', expirationdate='$expirationdate' WHERE id='$id'")
 or die(mysql_error()); 
 

 header("Location: view.php"); 
 }
 }
 else
 {
 echo 'Error!';
 }
 }
 else
 {
 
 if (isset($_GET['id']) && is_numeric($_GET['id']) && $_GET['id'] > 0)
 {
 // query db
 $id = $_GET['id'];
 $result = mysql_query("SELECT * FROM tblproducts WHERE id=$id")
 or die(mysql_error()); 
 $row = mysql_fetch_array($result);
 
 
 if($row)
 {
 
 // get data from db
$productname = $row['productname'];
$quatity = $row['quatity'];
$unitprice = $row['unitprice'];
$expirationdate = $row['expirationdate'];
 // show form
 renderForm($id, $productname, $quatity, $unitprice, $expirationdate, '');
 }
 else
 // if no match, display result
 {
 echo "No results!";
 }
 }
 else
 {
 echo 'Error!';
 }
 }
?>