<?php
include('../../config/config.php');

$username = $_POST['username'];
$hoten = $_POST['name'];
$mk = $_POST['password'];
$mail = $_POST['email'];
$dt = $_POST['sdt'];
$ROLE = $_POST['quyen'];
$tinhtrang = $_POST['status'];
$mk=md5($mk);


if(isset($_POST['themuser'])){
	if($username ==""){
		echo '<p style="color:red">Bạn chưa nhập tên tài khoản</p>';
	}
	elseif($hoten==""){
		echo '<p style="color:red">Bạn chưa nhập tên</p>';
	}
	elseif($mk==""){
		echo '<p style="color:red">Bạn chưa nhập password</p>';
	}
	elseif($mail==""){
		echo '<p style="color:red">Bạn chưa nhập email</p>';
	}
	elseif($dt==""){
		echo '<p style="color:red">Bạn chưa nhập số diện thoại</p>';
	
	}
	elseif(preg_match("((09|03|07|08|05)+([0-9]{8})\b)",$dt)==false) {
		echo '<p style="color:red">số diện thoại chưa đúng định dạng</p>';
	  }
	else{
		$sql="select * from tbl_dangky where username='$username'";
			$kt=mysqli_query($mysqli, $sql);

			if(mysqli_num_rows($kt)  > 0){
				echo '<p style="color:red">username đã tồn tại</p>';
			}
			else{
	//them
	$sql_them = "INSERT INTO tbl_dangky(username,hoten,matkhau,email,dienthoai,Status,ROLE) VALUE('".$username."','".$hoten."','".$mk."','".$mail."','".$dt."','".$tinhtrang."','".$ROLE."')";
	mysqli_query($mysqli,$sql_them);
	header('Location:../../index.php?action=quanlyuser&query=them');
		}
	}
}elseif(isset($_POST['suauser'])){
	$mk=md5($mk);
	$sql_update = "UPDATE tbl_dangky SET username='".$username."',hoten='".$hoten."',matkhau='".$mk."',email='".$mail."',dienthoai='".$dt."',Status='".$tinhtrang."',ROLE='".$ROLE."' WHERE id='$_GET[iduser]'";
	mysqli_query($mysqli,$sql_update);
	header('Location:../../index.php?action=quanlyuser&query=them');
}else{
	$id=$_GET['iduser'];
	$sql = "SELECT * FROM tbl_dangky WHERE id = '$id' LIMIT 1";
	$query = mysqli_query($mysqli,$sql);
	$sql_xoa = "DELETE FROM tbl_dangky WHERE id='".$id."'";
	mysqli_query($mysqli,$sql_xoa);
	header('Location:../../index.php?action=quanlyuser&query=them');
}

?>