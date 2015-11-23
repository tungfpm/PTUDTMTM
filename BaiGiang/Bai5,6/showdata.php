<?php 
	$conn = mysql_connect("localhost", "root", "") or die("can't connect database");
	mysql_select_db("project",$conn);
	$sql = "select * from project_qltintuc";
	$query = mysql_query($sql);
	if(mysql_num_rows($query) == 0){
		echo "Chua co du lieu";
	} else {
		while($row = mysql_fetch_array($query)){
			echo $row['username'] ." - ".$row['password']."<br />";
		}
	}
	mysql_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Show Data</title>
</head>
<body>

</body>
</html>
