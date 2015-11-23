<?php
    $title = "Edit Maker";
    $sicon = "paper&pencil_48";
    require ("../partials/top.php");
    require ("maker.php");
    $mh = $_GET['umh'];
    $maker = new maker;
    $data = $maker->get_makerdata($mh);
?>
    <div class="container">
      <form class="form-signin" action="edit_maker.php?umh=<?php echo $mh;?>" method="post">
        <h2 class="form-signin-heading">Please add maker</h2>
        <div class="form-group">
        <label class="sr-only">Mã Hãng</label>
        <input type="text" class="form-control" placeholder="Mã Hãng" name="fmahang" disabled=""  value="<?php echo $data['mahang'] ;?>"required autofocus>
        <br>
        <label class="sr-only">Tên Hãng</label>
        <input type="text" class="form-control" placeholder="Tên Hãng" name="ftenhang" value="<?php echo $data['tenhang'] ;?>" required>
        <center>
        <?php
            echo "<br/>";
            echo "<font color='red'>";
                $th = "";
                if (isset($_POST['submit'])){
                    if ($_POST['ftenhang'] == NULL) {
                        echo "Tên hãng trống<br />";
                    } else {
                        $th = ($_POST['ftenhang']);                        
                    }

                    if($th != ""){
                        $maker = new maker;
                        $maker->set_tenhang($th);

                        if ($types->check_types_mh()) {
                            if ($types->check_types_th()) {
                                $types->update_types($mh);
                                header("location:list_maker.php");
                            } else {
                                echo "Tên hãng đã tồn tại";
                            }                            
                        } else {
                            echo "Mã hàng đã tồn tại";
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