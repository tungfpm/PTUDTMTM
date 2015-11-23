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
                require('process/product/product.php');
                $product = new product;
                $data = $product->list_product();    
                foreach($data as $item){
            ?>
                <div class="col-xs-6 col-sm-4 col-md-3 shirt-border">
                    <div class="border-img">
                        <a href="show_sp.php?masp=<?=$item['masp']?>" > 
                        <img src="<?php echo "process/product/data_img/".$item['anh'];?>" class="img-responsive" ></a>
                    </div>
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