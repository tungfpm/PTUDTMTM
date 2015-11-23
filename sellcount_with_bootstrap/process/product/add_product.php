<?php
    $title = "Add product";
    $sicon = "add_48";
    require_once ("../partials/top.php");
    require_once ("product.php");
    require_once ("../maker/maker.php");
    require_once ("../types/types.php");
?>
    <div class="container">
      <form class="form-signin" action="add_product.php" method="post" enctype="multipart/form-data">
        <h2 class="form-signin-heading">Please add product</h2>
        <div class="form-group">
            <label>Mã Sản phẩm</label>
            <input type="text" class="form-control" placeholder="Mã Sản phẩm" name="fmasp" required autofocus>
        </div>
        <div class="form-group">
            <label>Tên Sản phẩm</label>
            <input type="text" class="form-control" placeholder="Tên Sản phẩm" name="ftensp" required>  
        </div>
        <!-- <div class="form-group">
            <label for="exampleInputFile">Ảnh Sản phẩm</label>
            <input type="file"  name="">            
        </div> -->

        <label for="file">Ảnh sản phẩm: </label><input type="file" name="img" size="25" />

        <div class="form-group">      
            <label>Giá</label>
            <input type="number" class="form-control" name="fgia" value="100000" required>
        </div>
        <div class="form-group">
            <label>Số lượng</label>
            <input type="number" class="form-control" name="fsoluong" value="1" required>
        </div>
        <div class="form-group">
            <label>Tên Hãng</label>
            <select name="fmahang">
                <?php
                    $maker = new maker;
                    $data = $maker->list_maker();
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
                    foreach ($data as $item) {
                        echo "<option value='$item[maloai]'>$item[tenloai]</option>";
                    }
                ?>
            </select>
        </div>
        <div class="form-group">
            <label>Thông tin thêm</label>
            <input type="text" class="form-control" placeholder="Thông tin thêm" name="ftt">
        </div>
        <center>
        <?php
            echo "<br/>";
            echo "<font color='red'>";                
                if (isset($_POST['submit'])){
                    $msp = "";
                    $tsp = "";
                    $gia = "";
                    $sl = "";
                    $mahang = $_POST['fmahang'];
                    $maloai = $_POST['fmaloai'];
                    $tt = $_POST['ftt'];

                    if($_POST['fmasp'] == NULL) {
                        echo "Mã sản phẩm trống<br />";
                    }else{
                        $msp = $_POST['fmasp'];
                    }
                    if ($_POST['ftensp'] == NULL) {
                        echo "Tên sản phẩm trống<br />";
                    } else {
                        $tsp = $_POST['ftensp'];                        
                    }

                    // if ($_FILES["img"]["name"] != NULL){
                    //     move_uploaded_file($_FILES["img"]["tmp_name"],"data/" .$_FILES["img"]["name"]);
                    //     $image=$_FILES["img"]["name"];
                    // }else{
                    //     echo "Vui lòng lựa chọn hình ảnh";
                    // }

                    if ($_POST['fgia'] != NULL) {
                        if ($_POST['fgia'] < 1) {
                            echo "Giá phải lớn hơn 0<br />";
                        } else {
                            $gia = ($_POST['fgia']);                        
                        }
                    } else {
                        echo "Giá trống";
                    }

                    if ($_POST['fsoluong'] != NULL) {
                        if ($_POST['fsoluong'] < 1) {
                            echo "Số lượng phải lớn hơn 0<br />";
                        } else {
                            $sl = ($_POST['fsoluong']);                        
                        }
                    } else {
                        echo "Số lượng trống";
                    }
                     $img = "img";
                    $product = new product;
                    //&& $product->check_upload(fimg)
                    if($msp != "" && $tsp != "" && $gia != "" && $sl != "" && $product->check_upload($img)){
                        $product = new product;
                        $product->set_masp($msp);
                        $product->set_tensp($tsp);
                        $product->set_anh($product->upload_image($img));
                        $product->set_gia($gia);
                        $product->set_soluong($sl);
                        $product->set_mahang($mahang);
                        $product->set_maloai($maloai);
                        $product->set_ttThem($tt);

                        if ($product->check_product_msp()) {
                            if ($product->check_product_tensp()) {
                                $product->insert_product();
                                echo "<a href='list_product.php'>
                                <button class='btn btn-lg btn-primary btn-block' type='submit' name='submit'>
                                Insert Success. -> List Product
                                </button>
                                </a>";
                            } else {
                                echo "Tên sản phẩm đã tồn tại";
                            }                            
                        } else {
                            echo "Mã sản phẩm đã tồn tại";
                        }
                    } else {
                        echo "Lỗi rồi";
                    }
                }
            echo "</font>";
        ?>
        </center>
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Add Product</button>
      </form>
    </div>
<?php
    require_once ("../partials/bottom.php");
?>