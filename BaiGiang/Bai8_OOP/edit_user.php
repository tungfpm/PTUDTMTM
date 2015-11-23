<?php
    require ("session.php");
    require ("user.php");
    $id = $_GET['uid'];
    $user = new user;
    $data = $user->get_userdata($id);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit User</title>
</head>
<body>
 	<form action="edit_user.php?uid=<?php echo $id; ?>" method="post">
		<select name="flevel">
			<option value="2" <?php if ($data['level'] == 2) {echo 'selected=""';}?>>Member</option>
			<option value="1"<?php if ($data['level'] == 1) {echo 'selected=""';}?>>Administrator</option>    
		</select>
		<br>
	    <label>Username</label>
	    <input type="text"  value="<?php echo $data['username'] ;?>" name="fuser">
	    <br>
	    <label>Password</label>
	    <input type="password" value="<?php echo $data['password'] ;?>" name="fpass">
	    <br>
	    <label>Re-Password</label>
	    <input type="password" value="<?php echo $data['password'] ;?>" name="fpass2">
	    <br> 
	    <button type="submit" name="submit">Update User</button>
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
                        if($_POST['fuser'] == NULL) {
                            echo "Tên đăng nhập trống<br />";
                        }else{
                            $u=$_POST['fuser'];
                        }
                        if ($_POST['fpass'] == NULL) {
                            echo "Mật khẩu trống<br />";
                        } else {
                            if($_POST['fpass'] != $_POST['fpass2']){
                                echo "Mật khẩu không trùng khớp";
                                $p = "dismatch";
                            } else {
                                $p = ($_POST['fpass']);
                            }
                        }

                        $l= $_POST['flevel'];;

                        if($u != "" && $p != "dismatch" && $l){
                            $user = new user;
                                $user->set_username($u);
                                $user->set_password($p);
                                $user->set_level($l);

                                if ($user ->check_user($data['username'])) {
                                    $user->update_user($id);
                                    header("location:index.php");
                                    exit();
                                } else {
                                    echo "Tên đăng nhập đã tồn tại";
                                }
                        }
                    }
                echo "</font>";
                ?>