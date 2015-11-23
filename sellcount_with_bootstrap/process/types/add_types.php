<?php
    $title = "Add Types";
    $sicon = "add_48";
    require ("../partials/top.php");
    require ("types.php");
?>
    <div class="container">
      <form class="form-signin" action="add_types.php" method="post">
        <h2 class="form-signin-heading">Please add types</h2>
        <div class="form-group">
        <label class="sr-only">Mã Loại</label>
        <input type="text" class="form-control" placeholder="Mã Loại" name="fmaloai" required autofocus>
        <br>
        <label class="sr-only">Tên Loại</label>
        <input type="text" class="form-control" placeholder="Tên Loại" name="ftenloai" required>
        <center>
        <?php
            echo "<br/>";
            echo "<font color='red'>";
                $ml = "";
                $tl = "";
                if (isset($_POST['submit'])){
                    if($_POST['fmaloai'] == NULL) {
                        echo "Mã loại trống<br />";
                    }else{
                        $ml=$_POST['fmaloai'];
                    }
                    if ($_POST['ftenloai'] == NULL) {
                        echo "Tên loại trống<br />";
                    } else {
                        $tl = ($_POST['ftenloai']);                        
                    }

                    if($ml != "" && $tl != ""){
                        $types = new types;
                        $types->set_maloai($ml);
                        $types->set_tenloai($tl);
                        
                        if ($types->check_types_ml()) {
                            if ($types->check_types_tl()){
                                $types->insert_types();
                                header("location:list_types.php");
                            } else {
                                echo "Tên loại đã tồn tại";
                            }
                        } else {
                            echo "Mã loai đã tồn tại";
                        }
                            
                    }
                }
            echo "</font>";
            ?>
        </center>
        <br>
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Add Types</button>
      </form>
    </div>
<?php
    require ("../partials/bottom.php");
?>