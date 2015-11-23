<?php
require("user.php");

$id=$_GET['uid'];
    $user = new user;
    $data = $user->get_userdata($id);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit user</title>
</head>
<body>
<form action="edit_user.php?uid=<?php echo $id; ?>" name="TungfpmForm" method="post">
<table>
	<tr>
		<td>Level : </td>
		<td>
			<select name="level">				
				<option value="1" <?php if ($data['level'] == 1) {echo 'selected=""';}?>>Member</option>
				<option value="2" <?php if ($data['level'] == 2) {echo 'selected=""';}?>>Administrator</option>				
			</select>
		</td>
	</tr>	
	<tr>
		<td>Username : </td>
		<td><input type="text" name="txtuser" size="25"  value="<?php echo $data['username'] ;?>" /></td>
	</tr>
	<tr>
		<td>Password :</td>
		<td><input type="password" name="txtpass" size="25" value="<?php echo $data['password'] ;?>" /></td>
	</tr>
	<tr>
		<td>Re-password:</td>
		<td><input type="password" name="txtpass2" size="25" value="<?php echo $data['password'] ;?>"/></td>
	</tr>
	<tr>
		<td>Email :</td>
		<td><input type="email" name="txtemail" size="25" value="<?php echo $data['email'] ;?>" /></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" name="submit" value="Edit" /></td>
	</tr>
</table>
</form>
</body>
</html>

<?php
    echo "<br/>";
    echo "<font color='red'>";
        $u = "";
        $p = "";
        $e = "";
        if (isset($_POST['submit'])){
            if($_POST['txtuser'] == NULL) {
                echo "Tên đăng nhập trống<br />";
            }else{
                $u=$_POST['txtuser'];
            }
            if ($_POST['txtpass'] == NULL) {
                echo "Mật khẩu trống<br />";
            } else {
                if($_POST['txtpass'] != $_POST['txtpass2']){
                    echo "Mật khẩu không trùng khớp";
                    $p = "dismatch";
                } else {
                    $p = ($_POST['txtpass']);
                }
            }
            if($_POST['txtemail'] == NULL) {
                echo "Email trống<br />";
            }else{
                $e=$_POST['txtemail'];
            }

            $l= $_POST['level'];;

            if($u != "" && $p != "dismatch" && $e != "" && $l){
                $user = new user;
                    $user->set_username($u);
                    $user->set_password($p);
                    $user->set_email($e);
                    $user->set_level($l);

                    if ($user ->check_user($data['username'])) {
                        $user->update_user($id);
                        header("location:list_user.php");
                        exit();
                    } else {
                        echo "Tên đăng nhập đã tồn tại";
                    }
            }
        }
    echo "</font>";
    ?>