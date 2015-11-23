<?php
require("includes/config.php");
require_once("templates/layout/top.php");
require_once("templates/layout/left.php");
?>
<script>
function kiemtra(){
	n=document.form.txtname.value;
	e=document.form.txtemail.value;
	m=document.form.txtmess.value;
	if(n == ""){
		alert("Vui lòng nhập tên của bạn");
		document.form.txtname.focus();
		return false;
	}
	if(e == ""){
		alert("Vui lòng nhập email của bạn");
		document.form.txtemail.focus();
		return false;
	}
	if(m == ""){
		alert("Vui lòng nhập nội dung của bạn");
		document.form.txtmess.focus();
		return false;
	}	
}
</script>

        <div id="info">
        	<h2>Trang liên hệ</h2>
        <?php
			if(isset($_POST['ok'])){
				if($_POST['txtname'] == NULL){
					echo "<font color='red'>Vui lòng nhập tên của bạn</font> <br />";
				}else{
					$n=$_POST['txtname'];
				}
				if($_POST['txtemail'] == NULL){
					echo "<font color='red'>Vui lòng nhập email của bạn</font> <br />";
				}else{
					$e=$_POST['txtemail'];
				}
				if($_POST['txtmess'] == NULL){
					echo "<font color='red'>Vui lòng nhập nôi dung liên hệ của bạn</font> <br />";
				}else{
					$m=$_POST['txtmess'];
				}	
				if($n && $e && $m){
					$to = "kenny@qhonline.info";
					$subject = "Thu lien he tu QHOnline.Info";
					$message = "Email nay duoc gui tu :$n<$e> \n$m";
					$headers = "MIME-Version: 1.0\n"; 
					$headers .= "Content-type: text/plain; charset=utf-8\n";
					$headers .= "Content-Transfer-Encoding: 8bit\n"; 
					$headers .= "From: $n<$e> \n"; 
					$headers .= "X-Priority: 1\n"; 
					$headers .= "X-MSMail-Priority: High\n"; 
					$headers .= "X-Mailer: PHP/" . phpversion()."\n"; 
					mail($to, $subject, $message, $headers);
					echo "<font color='red'>Cám ơn vì sự phản hồi của bạn, chúng tôi sẽ phúc đáp ngay sau khi nhận được thông tin của bạn.</font>";
				}							
			}
		?>
            
			<form action="contact.php" method="post" name="form" onsubmit="return kiemtra();">
            <table>	
            	<tr>
                	<td>Tên của bạn:</td>
                    <td><input type="text" name="txtname" size="30" /></td>
                </tr>
            	<tr>
                	<td>Email của bạn:</td>
                    <td><input type="text" name="txtemail" size="30" /></td>
                </tr> 
            	<tr>
                	<td>Nội dung của bạn:</td>
                    <td><textarea name="txtmess" cols="35" rows="5"></textarea></td>
                </tr>   
                <tr>
                	<td></td>
                    <td><input type="submit" name="ok" value="Submit" /></td>
                </tr>                            
            </table>
            </form>
        </div>

<?php
require_once("templates/layout/bottom.php");
?>