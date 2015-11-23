<?php 
    $title = "Sellcount";
    $sl = 1;
    require("templates/header.php");
?>
    <!--Start Content-->
        <div class="row">
            <div class="col-xs-10 col-xs-offset-1">
                <img src="process/assets/images/sale.jpg" class="img-responsive img-thumbnail sale" >
                <div class="hr-dot"></div>

                <div class="row">
                    <?php
                        require('process/product/product.php');
                        $product = new product;
                        $data = $product->list_product();    
                        foreach($data as $item){
                    ?>
                        <div class="col-xs-6 col-sm-4 col-md-3 shirt-border">
                            <div class="border-img">
                                <a href="show_sp.php?masp=<?php echo $item['masp']?>" > 
                                <img src="<?php echo "process/product/data_img/".$item['anh'];?>" class="img-responsive" ></a>
                            </div>
                        </div>
                    <?php
                        }
                    ?>
                </div>



                <!-- 
                <div class="row">
                    <div class="col-xs-6 col-sm-4 col-md-3 shirt-border">
                        <div class="border-img">
                            <img src="process/assets/images/shirt-red.jpg" class="img-responsive" >
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3 shirt-border">
                        <div class="border-img">
                            <img src="process/assets/images/shirt-orange.jpg" class="img-responsive" >
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3 shirt-border">
                        <div class="border-img">
                            <img src="process/assets/images/shirt-green.jpg" class="img-responsive" >
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3 shirt-border">
                        <div class="border-img">
                            <img src="process/assets/images/shirt-blue.jpg" class="img-responsive" >
                        </div>
                    </div>
                </div> -->

                <div class="col-xs-12 hr-dotted">
                    <div class="col-xs-6 col-xs-offset-3 col-sm-4 col-sm-offset-4 col-md-3 col-md-offset-5 button">
                        <a href="shop.php"><img src="process/assets/images/bg-button.jpg" class="img-responsive"><span>Shop here!</span></a>
                    </div>
                </div>
            </div>
        </div>
    <!--End Content-->
<?php
    require("templates/footer.php");
?>    