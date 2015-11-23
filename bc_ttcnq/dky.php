<?php
	 session_start();
	
	
?>
<script type="text/javascript">
	function check_in()
					{
							if(document.fedit.user.value=="")
							{
								alert("Ten dang nhap cua ban khong duoc de trong");
								document.fedit.user.focus();
								return false;
							}
							if(document.fedit.pass.value=="")
							{
								alert("bạn nhap mat khau");
								document.fedit.pass.focus();
								return false;
							}
						
						
						if(document.fedit.ten.value=="")
							{
								alert("bạn chưa nhập tên");
								document.fedit.ten.focus();
								return false;
							}
						
						
							var email=document.fedit.mail.value;
						if(email=="")
							{
								alert("bạn chưa nhập email");
								document.fedit.mail.focus();
								return false;
							}
						if(email.indexOf("@")==-1 || email.indexOf(".")==-1)
							{
								alert("bạn vui lòng nhập đúng emial");
								document.fedit.mail.focus();
								return false;
							}
						if(document.fedit.dc.value=="")
							{
								alert("bạn chưa nhập địa chỉ");
								document.fedit.dc.focus();
								return false;
							}
						var sdt=document.fedit.sdt.value;
						if(sdt=="")
							{
								alert("bạn chưa nhập số điện thoại");
								document.fedit.sdt.focus();
								return false;
							}
						if(isNaN(sdt)==true)
							{
								alert("Điện thoại là kiểu sô");
								document.fedit.sdt.focus();
								return false;
							}
						if(sdt.length<10||sdt.length>13)
							{
								alert("Số điện thoại của bạn không đúng");
								document.fedit.sdt.focus();
								return false;
							}
						return true;
					}
</script>
<style type="text/css">
#fgiua{

margin:auto;
padding:auto;
height:400px;
width:550px;
background:#DCDCDC;
margin-top:50px;
margin-bottom:50px;

}
form{
		padding:40px 70px;
	}

label{
float:left;
width:150px;
margin-top:30px;
color:red;
clear:left;
}
.nhan{
margin-top:30px;
border:1px solid blue ;
}
</style>
<div style="height:5px; width:980px; background:red"></div>
<div id='fgiua' >
<form action="ktra.php" name="fedit" method="post">
<label for="user">User:</label>
		<input type="text" value="" name="user" id="user"class="nhan"/><br/>
	<label for="pass">Pass:</label>
		<input type="password" value="" name="pass" id="pass"class="nhan"/><br/>
	<label for="ten">Ho Ten:</label>
		<input type="text" value="" name="ten" id="ten"class="nhan"/><br/>
	<label for="mail">email:</label>
			<input type="text" name="mail" value="" id="mail"class="nhan"/><br/>
	<label for="dc">Đỉa chỉ:</label>
			<input type="text" name="dc" value"" id="dc"class="nhan"/><br/>
	<label for="sdt">Số điện thoại:</label>
			<input type="text" name="sdt" value="" id="sdt"class="nhan"/><br/>
	
			<input type="submit" onclick="return check_in()"name="ok" value="Hoàn tất mua " class="nhan" style="width:150px;background:#800000;
			height:30px;color:#FFF0F5;font-size:16px; font-style:italic"/>
</form>
</div>
