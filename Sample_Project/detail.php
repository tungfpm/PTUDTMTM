<?php
require("includes/config.php");
require_once("templates/qhonline/top.php");
require_once("templates/qhonline/left.php");
?>
        <div id="info">
        <?php
		$id=$_GET['nid'];
		$sql="select news_id,news_title, news_full, news_img,cate_id from news where news_check='Y' and news_id='$id'";
		$query=mysql_query($sql);
		$data=mysql_fetch_assoc($query);
		$info=$data[news_full];
		$cate=$data[cate_id];
		//$info=str_replace("\n","<br />",$info);
		$info=str_replace("[b]","<b>",$info);
		$info=str_replace("[/b]","</b>",$info);
		$info=str_replace(":))","<img src='data/icon1.gif' />",$info);
		$info=str_replace("hack","****",$info);
        	echo "<div class='news'>";
            echo "<h1>$data[news_title]</h1>";
            if($data[news_img] != NULL){
				echo "<img src='data/$data[news_img]' width='130' align='left' />";
			}
            echo $info;
            echo "<div class='cls'></div>";
            echo "</div>";
		$sql="select news_id, news_title from news where cate_id='$cate' and news_id < $id and news_check='Y' order by news_id DESC limit 0,10";
		$query=mysql_query($sql);
		if(mysql_num_rows($query) != 0){
			echo "<h3>Ban Tin Khac</h3>";
			echo "<ul>";
			while($data2=mysql_fetch_assoc($query)){
				echo "<li><a href='detail.php?nid=$data2[news_id]'>$data2[news_title]</a></li>";
			}
			echo "</ul>";
		}
		?>
        </div>

<?php
require_once("templates/qhonline/bottom.php");
?>