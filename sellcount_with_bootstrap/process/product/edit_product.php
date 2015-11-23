<?php
    $title = "Edit Product";
    $sicon = "paper&pencil_48";
    require_once ("../partials/top.php");
    require_once ("product.php");
    require_once ("../maker/maker.php");
    require_once ("../types/types.php");
    $msp= $_GET['umsp'];
    $product = new product;
    $data = $product->get_productdata($msp);
?>
    <div class="container">
      <form class="form-signin" action="edit_product.php?umsp=<?php echo $msp;?>" method="post" enctype="multipart/form-data">
        <h2 class="form-signin-heading">Please add product</h2>
        <div class="form-group">
            <label>Mã Sản phẩm</label>
            <input type="text" class="form-control" name="fmasp" disabled="" value="<?php echo $data['masp'];?>" required autofocus>
        </div>
        <div class="form-group">
            <label>Tên Sản phẩm</label>
            <input type="text" class="form-control" name="ftensp" value="<?php echo $data['tensp'];?>" required>  
        </div>
        <!-- <div class="form-group">
            <label for="exampleInputFile">Ảnh Sản phẩm</label>
            <input type="file"  name="">            
        </div> -->
        <label>Hình ảnh cũ : </label><?php echo"<img src ='data_img/$data[anh]' width='50' 
        class='img-rounded' alt='Error. No Image to Load'/>" ?>
        <br>
        <label for="file">Ảnh sản phẩm: </label><input type="file" name="img" size="25" />

        <div class="form-group">      
            <label>Giá</label>
            <input type="number" class="form-control" name="fgia" value="<?php echo $data['gia'];?>" required>
        </div>
        <div class="form-group">
            <label>Số lượng</label>
            <input type="number" class="form-control" name="fsoluong" value="<?php echo $data['soluong'];?>" required>
        </div>
        <div class="form-group">
            <label>Tên Hãng</label>
            <select name="fmahang">
                <?php
                    $maker = new maker;
                    $datalist = $maker->list_maker();
                    foreach ($datalist as $item) {
                        $th = $item['tenhang'];
                        echo "<option value='$item[mahang]'";
                            if ($item['mahang'] == $data['mahang']){
                                echo ' selected="" ';
                            }
                        echo ">"; 
                        echo $item['tenhang'];
                        echo "</option>";
                    }
                ?>
            </select>
            <label>Tên Loại</label>
            <select name="fmaloai">
                <?php
                    $types = new types;
                    $datalist = $types->list_types();
                    foreach ($datalist as $item) {
                        $th = $item['tenloai'];
                        echo "<option value='$item[maloai]'";
                            if ($item['maloai'] == $data['maloai']){
                                echo ' selected="" ';
                            }
                        echo ">"; 
                        echo $item['tenloai'];
                        echo "</option>";
                    }
                ?>
            </select>
        </div>
        <div class="form-group">
            <label>Thông tin thêm</label>
            <input type="text" class="form-control" value="<?php echo $data['ttthem'];?>" name="ftt">
        </div>
        <center>
        <?php
            echo "<br/>";
            echo "<font color='red'>";
                if (isset($_POST['submit'])){
                    $tsp = "";
                    $gia = "";
                    $sl = "";
                    $mahang = $_POST['fmahang'];
                    $maloai = $_POST['fmaloai'];
                    $tt = $_POST['ftt'];

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
                     $old_img = $data['anh'];
                     $img = "img";
                    $product = new product;
                    //&& $product->check_upload(fimg)
                    if($msp != "" && $tsp != "" && $gia != "" && $sl != "" ){
                        $product = new product;
                        $product->set_masp($msp);
                        $product->set_tensp($tsp);
                        $product->set_anh($old_img);
                        $product->set_gia($gia);
                        $product->set_soluong($sl);
                        $product->set_mahang($mahang);
                        $product->set_maloai($_POST['fmaloai']);
                        $product->set_ttThem($tt);

                        $product->update_product($msp);
                        $product->upload_new();
                        // header("location:list_product.php");
                        echo "<a href='list_product.php'>
                            <button class='btn btn-lg btn-primary btn-block' type='submit' name='submit'>
                            Update Success.
                            </button>
                            </a><br>";
                                                   
                       
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