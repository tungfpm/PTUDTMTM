    <div id="main">
    	<div id="left">
        	<h1>Trang Chủ</h1>
            <ul>
            	<li><a href="index.php">Trang Chủ</a></li>
            	<li><a href="page.php?pid=1">Giới Thiệu</a></li>
            	<li><a href="page.php?pid=2">Dịch Vụ</a></li>
                <li><a href="page.php?pid=3">Hỗ Trợ</a></li>  
            	<li><a href="page.php?pid=4">Khách Hàng</a></li>
            	<li><a href="contact.php">Liên Hệ</a></li>                                                              
            </ul>
        	<h1>Chuyên Mục</h1>
            <ul>
                <?php
    				$sql="select * from cate_news";
    				$query=mysql_query($sql);
    				if(mysql_num_rows($query) == 0){
    					echo "<li><a href='#'>Chưa có dữ liệu</a></li>";
    				}else{
    					while($data=mysql_fetch_assoc($query)){
    						echo "<li><a href='categorie.php?cid=$data[cate_id]'>$data[cate_title]</a></li>";
    					}
    				}
    			?>                                                        
            </ul>            
        </div>