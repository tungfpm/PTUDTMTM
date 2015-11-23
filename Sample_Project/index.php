<?php
require("includes/config.php");
require_once("templates/layout/top.php");
require_once("templates/layout/left.php");
?>
        <div id="info">
        <?php
		$sql="select news_id,news_title, news_info, news_img from news where news_check='Y' order by news_id DESC limit 0,6";
		$query=mysql_query($sql);
		while($data=mysql_fetch_assoc($query)){
        	echo "<div class='news'>";
            echo "<h1>$data[news_title]</h1>";
            if($data['news_img'] != NULL){
				echo "<img src='data/$data[news_img]' width='130' align='left' />";
			}
            echo $data['news_info'];
			echo "<p align='right'>...<a href='detail.php?nid=$data[news_id]'>Đọc tiếp</a></p>";
            echo "<div class='cls'></div>";
            echo "</div>";
		}
		?>
        </div>

<?php
require_once("templates/layout/bottom.php");
?>