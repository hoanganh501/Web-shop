<?php
    if(isset($_POST['dangnhap'])){
		$loginuser = $_POST["txtuser"];
		$loginpass =$_POST["txtpass"];
		$sql = "SELECT * FROM tbl_dangky,tbl_admin WHERE tbl_dangky.username='".$loginuser."' AND tbl_dangky.matkhau='".$loginpass."' OR( tbl_admin.username='".$loginuser."' AND tbl_admin.password='".$loginpass."' )LIMIT 1";
		$row = mysqli_query($mysqli,$sql);
		$count = mysqli_num_rows($row);

		if($count>0){
			$row_data = mysqli_fetch_array($row);
			$_SESSION['dangky'] = $row_data['username'];
			$_SESSION['id_khachhang'] = $row_data['id'];
			echo '<p style="color:green">dang nhap thanh cong.</p>';
			header("Location:index.php?quanly=thanhtoan");
		}else{
			echo '<p style="color:red">Mật khẩu hoặc Email sai ,vui lòng nhập lại.</p>';
			
		}
	} 
?>