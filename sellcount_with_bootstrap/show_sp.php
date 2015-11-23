<?php 
    $title = "Sellcount - Shop";
    $sl = 4;
    require("templates/header.php");
?>
    <!--Start Content-->
    <div class="row">
        <div class="col-xs-10 col-xs-offset-1">
            <div class="row">
        	   <?php
                require("process/product/product.php");
                $show = new product;
                $msp = $_GET['masp'];
                $data = $show -> show_sp($msp);
                foreach ($data as $item) {
                ?>         
                <div class="col-xs-6 col-sm-4 col-md-3 shirt-border">
                    <div class="border-img">
                        <a href="show_sp.php?masp=<?php echo $item['masp']?>" > 
                        <img src="<?php echo "process/product/data_img/".$item['anh'];?>" class="img-responsive" ></a>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-5">
                <br>
                    <table class="table table-hover table-bordered">
                        <tr>
                            <td>Tên sản phẩm : <?php echo $item['tensp'];?></td>
                        </tr>
                        <tr>
                            <td>Giá sản phẩm : <?php echo $item['gia'];?></td>
                        </tr>
                        <tr>
                            <td>Mã hãng : <?php echo $item['mahang'];?></td>
                        </tr>
                        <tr>
                            <td>Mã loại : <?php echo $item['maloai'];?>:</td>
                        </tr>
                        <tr>
                            <td>Thông tin thêm : <?php echo $item['ttthem'];?></td>
                        </tr>
                    </table>
                    <button class="btn btn-md btn-primary" type="submit" name="submit">Thêm vào giỏ hàng</button>
                </div>
                <?php
                    }
                ?>
            </div>
        </div>
    </div>
    <!--End Content-->
<?php
    require("templates/footer.php");
?>    