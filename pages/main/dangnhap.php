
<p>Đăng nhập khách hàng</p>
<form action="" autocomplete="off" method="POST" class="loginform">
<?php
    if(isset($_POST['dangnhap'])){
		$loginuser = $_POST["txtuser"];
		$loginpass =$_POST["txtpass"];
		$loginpass=md5($loginpass);
		if(!$loginuser||!$loginpass){
			echo '<p style="color:red">Vui lòng điền đủ</p>';
       
		}
		
		$sql = "SELECT * FROM tbl_dangky WHERE username='".$loginuser."' AND Status='1'";
		$row = mysqli_query($mysqli,$sql);
		$row2 = mysqli_fetch_array($row);
		$count = mysqli_num_rows($row);
		$loginpass=md5($loginpass);
		if($count==0){
			echo '<p style="color:red">Tên tài khoản sai ,hoặc bị banned.</p>';
			exit();
		}
		elseif($loginpass!=$row2['matkhau']){
			echo '<p style="color:red">mật khẩu sai ,vui lòng nhập lại.</p>';
			exit();
		}
		
		else{
			
			$_SESSION['dangky'] = $row2['username'];
			$_SESSION['id_khachhang'] = $row2['id'];
			echo '<p style="color:green">Đăng nhập thành công.   <a href="index.php">Bấm vào đây để mua hàng</a></p>';
			
		
		}
	} 
?>
				
		
				<label>Tài khoản</label>
				<input type="text" size="50" name="txtuser" placeholder="username..." id="user">
		
		
				<label>Mật khẩu</label>
				<input type="password" size="50" name="txtpass" placeholder="Mật khẩu..." id="passw">
		
	
				<span id="loginresult"></span>
				<input type="submit" name="dangnhap" value="Đăng nhập" id="log"></td>
	
	
	</form>
	<style>
		.loginform{
		border: 1px solid #999;
		height:550px;
		background-color:bisque;
	}
	p{
		margin-left:20px;
		font-size: 20px;
		font-family:Arial, Helvetica, sans-serif;
	}
	.loginform input[type='submit'] {
		padding: 14px;
	width: 12%;
	margin: 10px;
	border-radius: 6px;
	
	cursor: pointer;
	background:linear-gradient(white,gray);
	color: black;
	margin-left:20px;
	}
	
	.loginform input[type='submit'] :hover {
	cursor: pointer;
	color: black;
	
    }
    .loginform label {
		font-size: 20px;
		margin: 6px;
	display: block;
	font-weight: lighter;
	margin-left:20px;
    }
    .loginform input[type='text'] {
		display: block;
	border-bottom: 2px solid #c36f70;
	border-radius: 3px;
	margin-bottom: 5px;
	background-color: white;
	padding: 5px;
	width: 25%;
	margin-left:20px;
   }
   .loginform input[type='password'] {
	display: block;
	border-bottom: 2px solid #c36f70;
	border-radius: 3px;
	margin-bottom: 5px;
	background-color: white;
	padding: 5px;
	width: 25%;
	margin-left:20px;
   }

   
</style>

