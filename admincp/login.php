<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
	body{
		background-image: url('wp4203608.jpg');
		background-color: #cccccc;
	}
#login-form {
	width: 100%;
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;
}
#login-box {
	background-color: #431718;
	min-height: 550px;
	width: 400px;
	box-sizing: border-box;
	flex-direction: column;
	align-items: center;
	position: fixed;
	top: 60%;
	left: 50%;
	transform: translate(-50%, -60%);
	border-radius: 15px;
	box-shadow: 0px 0px 47px 0px black;
	background: linear-gradient(#9c5556, #431718);
	z-index: 100;
}
#login-box h1 {
	font-size: 35px;
	margin: 8px;
	padding: 50px 20px 60px;
	text-align: center;
	color: #e39d9e;
}
#login-box b {
	padding: 20px 0px 0px;
	text-align: center;
	font-weight: bold;
}
#login-box a {
	color: black;
	font-size: 20px;
	
	text-decoration: none;
	margin: 5px 5px;
}
#login-box label {
	display: block;
	font-weight: lighter;
}
#login-box input {
	display: block;
	border-bottom: 2px solid #c36f70;
	margin-top: 30px;
	border-radius: 3px;
	margin-bottom: 10px;
	background-color: antiquewhite;
}
#login-box input[type='text'] {
	padding: 5px;
	width: 80%;
}
#login-box input[type='password'] {
	padding: 5px;
	width: 80%;
}

#login-form a {
	text-decoration: none;
	color: antiquewhite;
	font-size: 17px;
	cursor: pointer;
	font-size: 18px;
	
}
#login-box i {
	background-color: #9c5556;
	font-size: 25px;
	position: absolute;
	top: 10px;
	right: 10px;
	margin: 0;
	padding: 0;
	border: none;
	float: right;
	border-radius: 50%;
	cursor: pointer;
}
#login-box button {
	padding: 14px;
	width: 40%;
	border-radius: 6px;
	position: absolute;
	bottom: 11px;
	cursor: pointer;
	background: linear-gradient(#751700, #1b1717);
	color: antiquewhite;
}
#login-box input[type='submit'] :hover {
	cursor: pointer;
	color: black;
}
#thongbao1,
#thongbao2 {
	color: red;
	margin-bottom: 20px;
}

</style>
<title>Đăng nhập vào trang admincp</title>
</head>
<?php
	session_start();
	include('config/config.php');
	if(isset($_POST['login'])){
		$username = $_POST['txtuser'];
		$password = $_POST['txtpass'];
		
		$sql="SELECT * from tbl_admin,tbl_dangky where tbl_admin.username='".$username."'";
		$row=mysqli_query($mysqli,$sql);
		$count=mysqli_num_rows($row);
		$row2=mysqli_fetch_array($row);
		if($count==0 ){
			echo '<center id="err" style="color:red;margin-top:30px;font-size:30px">Tài khoản không tồn tại.Làm ơn đăng nhập lại.</center>';
			exit();
			
		}elseif($password!=$row2['password']){
			echo '<center id="err" style="color:red;margin-top:30px;font-size:30px">mật khẩu không đúng.Làm ơn đăng nhập lại.</center>';
			exit();
			
		}
		else{
			$_SESSION['login']=$username;
			header("location:index.php");
			       
			
		}
	}
?>
<body>
<

<div id="login-box" >
					<i class="fa fa-times" onclick="closelogin()"></i>
					<h1>ĐĂNG NHẬP</h1>
					<div id="thongbao2"></div>
					<form action="login.php" method="post" id="login-form" onsubmit="return DangNhap()">
						<label style="margin-left: -7px; color: #e39d9e"><b>Tên tài khoản</b></label>
						<input type="text" id="userlogin" name="txtuser" value="" required />

						<label style="margin-left: -7px; color: #e39d9e"><b>Mật khẩu</b></label>
						<input type="password" id="passlogin" name="txtpass" value="" required />

						<input type="submit" onclick="onFormSubmit()" name="login" value="Đăng nhập" />
					</form>
				</div>
</body>
</html>