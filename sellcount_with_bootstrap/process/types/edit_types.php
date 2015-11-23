<?php
    $title = "Edit types";
    $sicon = "paper&pencil_48";
    require ("../partials/top.php");
    require ("types.php");
    $ml = $_GET['uml'];
    $types = new types;
    $data = $types->get_typesdata($ml);
?>
    <div class="container">
      <form class="form-signin" action="edit_types.php?uml=<?php echo $ml;?>" method="post">
        <h2 class="form-signin-heading">Please add types</h2>
        <div class="form-group">
        <label class="sr-only">Mã Hãng</label>
        <input type="text" class="form-control" placeholder="Mã Hãng" name="fmaloai" disabled=""  value="<?php echo $data['maloai'] ;?>"required autofocus>
        <br>
        <label class="sr-only">Tên Hãng</label>
        <input type="text" class="form-control" placeholder="Tên Hãng" name="ftenloai" value="<?php echo $data['tenloai'] ;?>" required>
        <center>
        <?php
            echo "<br/>";
            echo "<font color='red'>";
                $th = "";
                if (isset($_POST['submit'])){
                    if ($_POST['ftenloai'] == NULL) {
                        echo "Tên loại trống<br />";
                    } else {
                        $tl = ($_POST['ftenloai']);                        
                    }

                    if($tl != ""){
                        $types = new types;
                        $types->set_tenloai($tl);

                        if ($types->check_types_ml()) {
                            if ($types->check_types_tl()) {
                                $types->update_types($ml);
                                header("location:list_types.php");
                            } else {
                                echo "Tên loại đã tồn tại";
                            }                            
                        } else {
                            echo "Mã loại đã tồn tại";
                        }
                    }
                }
            echo "</font>";
            ?>
        </center>
        <br>
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Update Maker</button>
      </form>
    </div>
<?php
    require ("../partials/bottom.php");
?>