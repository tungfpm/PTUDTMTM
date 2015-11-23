<!DOCTYPE html>
<html>
<head>
	<title>Check ages</title>
</head>
<body>

<form action="check_age.php" name="Tungfpm" method="post">
		<tr>
			<td>Ngày sinh : </td>
			<td>
				<select name="fday">
					<?php
						for ($i=1; $i <=31 ; $i++) { 
							echo "<option value='$i'>$i</option>";
						}
					?>
				</select>
				<select name="fmonth">
					<?php
						for ($i=1; $i <=12 ; $i++) { 
							echo "<option value='$i'>$i</option>";
						}
					?>
				</select>
				<select name="fyear">
					<?php
						$now = date("Y");
						for ($i=1990; $i <=$now ; $i++) { 
							echo "<option value='$i'>$i</option>";
						}
					?>
				</select>
			</td>
		</tr>
		<tr>
			<td></td>
			<td>
				<input type="submit" name="fsubmit" value="Check">
			</td>
		</tr>
	</table>
</form>
</body>

<?php 
	if(isset($_POST['fsubmit'])){
		$day = $_POST['fday'];
		$month = $_POST['fmonth'];
		$year = $_POST['fyear'];
		echo "Sinh ngày $day tháng $month năm $year<br>";
		echo "Tuổi : " . (date("Y")-$year);
	}
	 echo time();
?>

</html>
