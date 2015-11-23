<!DOCTYPE html>
<html>
<head>
	<title>Bài 2.2</title>
</head>
<body>
	<h3>Bảng cửu chương</h3>
</body>
</html>
<?php
	for ($i=1; $i <= 10 ; $i++) { 
?>
	<table style="float:left" >
		<?php	
			for ($j=1; $j <= 10 ; $j++) {
			$multi = $i*$j; 
		?>
		<tr>
			<td width="100px">
				<?php 
					echo "$i x $j = $multi";
				?>
			</td>
		</tr>
		<?php
			}
		?>
	</table>
<?php
	}
?>