<?php
    $title = "Add Maker";
    $sicon = "add_48";
    require ("../partials/top.php");
    require ("maker.php");
?>
    <div class="container">
      <form class="form-signin" action="add_maker.php" method="post">
        <h2 class="form-signin-heading">Please add maker</h2>
        <div class="form-group">
        <label class="sr-only">Mã Hãng</label>
        <input type="text" class="form-control" placeholder="Mã Hãng" name="fmahang" required autofocus>
        <br>
        <label class="sr-only">Tên Hãng</label>
        <input type="text" class="form-control" placeholder="Tên Hãng" name="ftenhang" required>
        <center>
        <?php
            echo "<br/>";
            echo "<font color='red'>";
                $mh = "";
                $th = "";
                if (isset($_POST['submit'])){
                    if($_POST['fmahang'] == NULL) {
                        echo "Mã hàng trống<br />";
                    }else{
                        $mh=$_POST['fmahang'];
                    }
                    if ($_POST['ftenhang'] == NULL) {
                        echo "Tên hãng trống<br />";
                    } else {
                        $th = ($_POST['ftenhang']);                        
                    }

                    if($mh != "" && $th != ""){
                        $maker = new maker;
                        $maker->set_mahang($mh);
                        $maker->set_tenhang($th);

                        if ($maker->check_maker_mh()) {
                            if ($maker->check_maker_th()) {
                                $maker->insert_maker();
                                header("location:list_maker.php");
                            } else {
                                echo "Tên hàng đã tồn tại";
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
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Add Maker</button>
      </form>
    </div>
<?php
    require ("../partials/bottom.php");
?>