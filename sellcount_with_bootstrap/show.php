<?php 
    $title = "Sellcount - Statistical";
    $sl = 3;
    require("templates/header.php");
    require_once ("process/maker/maker.php");
    require_once ("process/types/types.php");
    require_once ("process/product/product.php");
?>
    <!--Start Content-->
    <br>
    <br>
        <div class="row">
        	<div class="col-xs-10 col-xs-offset-1">
            <div class="container">
            <form class="form-signin" action="show.php" method="post">
            	<div class="form-group">
                    <label>Tên Hãng</label>
                    <select name="fmahang">
                        <?php
                            $maker = new maker;
                            $data = $maker->list_maker();
                            echo "<option value=''>None</option>";
                            foreach ($data as $item) {
                                echo "<option value='$item[mahang]'>$item[tenhang]</option>";
                            }
                        ?>
                    </select>
                    <label>Tên Loại</label>
                    <select name="fmaloai">
                        <?php
                            $types = new types;
                            $data = $types->list_types();
                            echo "<option value=''>None</option>";
                            foreach ($data as $item) {
                                echo "<option value='$item[maloai]'>$item[tenloai]</option>";
                            }
                        ?>
                    </select>
                    <button class="btn btn-sm btn-primary" type="submit" name="submit">Find</button>
                </div>
                
                <div class="col-xs-10">
                <table class="table table-hover table-bordered" width="800px">
                    <tr class="danger">
                    <td>STT</td>
                        <td>Mã sản phẩm</td>
                        <td>Tên sản phẩm</td>
                        <td>Ảnh sản phẩm</td>
                        <td>Giá sản phẩm</td>
                        <td>Số lượng</td>
                        <td>Mã hãng</td>
                        <td>Mã loại</td>
                        <td>Thông tin thêm</td>
                    </tr>
                <?php
                if (isset($_POST['submit'])){
                    $mahang = $_POST['fmahang'];
                    $maloai = $_POST['fmaloai'];
                    $product = new product;
                    $data = $product->timkiem($mahang,$maloai);
                    $stt = 0;
                    if ($data == 0) {
                        echo "<tr class='info'><td colspan='9'><center>Empty Data. Can't find !</center></td></tr>";
                    } else {
                        foreach ($data as $item) {
                            $stt++;
                            echo "<tr>";
                            echo "<td>$stt</td>";
                            echo "<td>$item[masp]</td>";
                            echo "<td>$item[tensp]</td>";           
                            echo "<td><img src ='process/product/data_img/$item[anh]' width='50' 
                            class='img-rounded' alt='Error. No Image to Load'/></td>";
                            echo "<td>$item[gia]</td>";         
                            echo "<td>$item[soluong]</td>";         
                            echo "<td>$item[mahang]</td>";          
                            echo "<td>$item[maloai]</td>";          
                            echo "<td>$item[ttthem]</td>";  
                            echo "</tr>";        
                        }
                    }
                }
                ?>
                </table>
                </div>
            </form>
        </div>
        </div>
        </div>
    <!--End Content-->
<?php
    require("templates/footer.php");
?>    