<?php
	if(isset($_POST['dangky'])) {
	        $regisuser = ($_POST['username']);
			$regishoten = ($_POST['hovaten']);
			$regispass =($_POST['matkhau']);
			$regisemail =($_POST['email']);
			$regissdt =($_POST['dienthoai']);
			$trangthai=1;
			$regispass=md5($regispass);
			$regex = "/([a-z0-9_]+|[a-z0-9_]+\.[a-z0-9_]+)@(([a-z0-9]|[a-z0-9]+\.[a-z0-9]+)+\.([a-z]{2,4}))/i"; 
			$role = 'user';
			if($regisuser==""){
				echo '<p style="color:red">Bạn chưa nhập tên tài khoản</p>';
			}
			elseif($regishoten==""){
				echo '<p style="color:red">Bạn chưa nhập tên</p>';
			}
			elseif($regispass==""){
				echo '<p style="color:red">Bạn chưa nhập password</p>';
			}
			elseif($regisemail==""){
				echo '<p style="color:red">Bạn chưa nhập email</p>';
			}
			elseif(!preg_match($regex,$regisemail)){
				echo '<p style="color:red">email chưa đúng định dạng</p>';
			}
			elseif($regissdt==""){
				echo '<p style="color:red">Bạn chưa nhập số diện thoại</p>';
			
			}
			elseif(preg_match("((09|03|07|08|05)+([0-9]{8})\b)",$regissdt)==false) {
				echo '<p style="color:red">số diện thoại chưa đúng định dạng</p>';
			  }
			else{
				$sql="select * from tbl_dangky where username='$regisuser'";
					$kt=mysqli_query($mysqli, $sql);

					if(mysqli_num_rows($kt)  > 0){
						echo '<p style="color:red">username đã tồn tại</p>';
					}
			

			else{
				$sqlDK =mysqli_query($mysqli,"INSERT INTO tbl_dangky (username,hoten,matkhau,email,dienthoai,Status,ROLE) VALUES ('".$regisuser."','".$regishoten."','".$regispass."','".$regisemail."','".$regissdt."','".$trangthai."','".$role."')");
			echo '<p style="color:green">Bạn đã đăng ký thành công</p>';
			$_SESSION['dangky'] = $regishoten;
			$_SESSION['id_khachhang'] = mysqli_insert_id($mysqli);
			
			}
		}

	}
?>
<p>Đăng ký thành viên</p>
<style type="text/css">
	table.dangky tr td {
	    padding: 5px;
	}
</style>
<p id="mess"></p>
<form action="" method="POST" class="dangky" >

   
		<label>username</label>
		<input type="text" size="50" name="username" id="username"></td>
	
	
		<label>Họ và tên</label>
		<input type="text" size="50" name="hovaten" id="hoten">
	
	
		<label>Mật khẩu</label>
		<input type="password" size="50" name="matkhau" id="pass">
	

		<label>Email</label>
		<input type="text" size="50" name="email" id="mail">


		<label>Điện thoại</label>
		<input type="text" size="50" name="dienthoai" id="dt">


		
		<input type="submit"  value="Đăng ký" onclick="return checkdk()"name="dangky">
		<a href="index.php?quanly=dangnhap">Đăng nhập nếu có tài khoản</a></td>
</form>

<style>
	.dangky{
		border: 1px solid #999;
		height:550px;
		background-color:bisque;
	}
    p{
		margin-left:20px;
		font-size: 20px;
		font-family:Arial, Helvetica, sans-serif;
	}
	.dangky input[type='submit'] {
	padding: 14px;
	width: 12%;
	margin: 10px;
	border-radius: 6px;
	
	cursor: pointer;
	background:linear-gradient(white,gray);
	color: black;
	margin-left:20px;
	}
	
	.dangky input[type='submit'] :hover {
	cursor: pointer;
	color: black;
	
    }
    .dangky label {
		font-size: 20px;
		margin: 6px;
	display: block;
	font-weight: lighter;
	margin-left:20px;
    }
    .dangky input[type='text'] {
	display: block;
	border-bottom: 2px solid #c36f70;
	border-radius: 3px;
	margin-bottom: 5px;
	background-color: white;
	padding: 5px;
	width: 25%;
	margin-left:20px;
   }
   .dangky input[type='password'] {
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
<script>
	function checkdk(){
		var username=document.getElementById('username').value;
		var hovaten=document.getElementById('hoten').value;
		var pass=document.getElementById('pass').value;
		var mail=document.getElementById('mail').value;
		var dt=document.getElementById('dt').value;
		var vnf_regex = /((09|03|07|08|05)+([0-9]{8})\b)/g;
		var mess=document.getElementById('mess').value;

		if(username==" "){
			alert('sai');
           mess.innerHTML = "không dược để trống username";
		   return false;
		}
		if(hovaten==" "){
           mess.innerHTML = "không dược để trống hoten";
		   return false;
		}
		if(pass==" "){
           mess.innerHTML = "không dược để trống password";
		   return false;
		}
		if(mail==" "){
           mess.innerHTML = "không dược để trống email";
		   return false;
		}
		if(dt==" "){
           mess.innerHTML = "không dược để trống sdt";
		   return false;
		}
		if(dt.match(vnf_regex)==false){
			mess.innerHTML = "sai dịnh dạng sdt";
			return false;
		}
		return true;

 
	}
</script>