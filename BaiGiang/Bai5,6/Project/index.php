<?php
require("/includes/session.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<style type="text/css">
		a{
			text-decoration: none;
		}
	</style>
</head>
<body>
<table align='center' width='750'>
	<tr>
		<td colspan='7' class='title'>Hi Sir, <?php echo $_SESSION['ses_username'];?></td>
	</tr>
	<tr>
		<td><a href='add_cate.php'>Add Categories</a></td>
		<td><a href='list_cate.php'>Manage Categories</a></td>
		<td><a href='add_news.php'>Add News</a></td>
		<td><a href='list_news.php'>Manage News</a></td>	
		<td><a href='add_user.php'>Add Member</a></td>
		<td><a href='list_user.php'>Manage Member</a></td>
		<td><a href='logout.php'>Logout</a></td>
	</tr>
</table>
</body>
</html>

