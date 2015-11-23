<?php
require("includes/config.php");
require_once("templates/layout/top.php");
require_once("templates/layout/left.php");
?>
        <div id="info">
        <?php
		$id=$_GET['pid'];
		$sql="select * from page where page_id='$id'";
		$query=mysql_query($sql);
		$data=mysql_fetch_assoc($query);
		$info=$data['page_info'];
        	echo "<div class='news'>";
            echo "<h2>$data[page_title]</h2>";
            echo $info;
            echo "<div class='cls'></div>";
            echo "</div>";

		?>
        </div>

<?php
require_once("templates/layout/bottom.php");
?>