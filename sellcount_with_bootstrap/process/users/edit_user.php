<?php

    $title = "Edit User";
    $sicon = "paper&pencil_48";
    require ("../partials/top.php");
    require ("user.php");
    $id = $_GET['uid'];
    $user = new user;
    $data = $user->get_userdata($id);
?>

    <div class="container">
        <form class="form-signin" action="edit_user.php?uid=<?php echo $id; ?>" method="post">
            <h2 class="form-signin-heading">Please add user</h2>
            <div class="form-group">
                <select class="form-control" id="sel1" name="flevel">
                    <option value="1" <?php if ($data['level'] == 1) {echo 'selected=""';}?>>Member</option>
                    <option value="2" <?php if ($data['level'] == 2) {echo 'selected=""';}?>>Administrator</option>    
                </select>
            </div>
            <label for="inputUsername" class="sr-only">Username</label>
            <input type="text"  class="form-control" value="<?php echo $data['username'] ;?>" name="fuser" required autofocus>
            <br>
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" id="inputPassword" class="form-control" value="<?php echo $data['password'] ;?>" name="fpass" required>
            <br>
            <label for="inputPassword" class="sr-only">Re-Password</label>
            <input type="password" id="inputPassword" class="form-control" value="<?php echo $data['password'] ;?>" name="fpass2" required>
            <br>
            <label for="inputEmail" class="sr-only">Email</label>
            <input type="email" class="form-control" value="<?php echo $data['email'] ;?>" name="femail" required>
            <center>
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
                        if($_POST['femail'] == NULL) {
                            echo "Email trống<br />";
                        }else{
                            $e=$_POST['femail'];
                        }

                        $l= $_POST['flevel'];;

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
            </center>
            <br>
            <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Update User</button>
        </form>
    </div>
<?php
    require ("../partials/bottom.php");
?>