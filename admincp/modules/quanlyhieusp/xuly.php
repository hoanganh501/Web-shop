<?php
include('../../config/config.php');

$tenhieusp = $_POST['tenhieu'];
if(isset($_POST['themhieusp'])){
	//them
	if($tenhieusp==""){
		echo  '<p style="color:red">Tên hiệu không dược để trống</p>';
	}
	//them
	else{
		$sql="select * from tbl_hieu where tenhieu='$tenhieusp'";
			$kt=mysqli_query($mysqli, $sql);

			if(mysqli_num_rows($kt)  > 0){
				echo '<p style="color:red">Tên Hiệu đã tồn tại</p>';
			}
			else{
	
	$sql_them = "INSERT INTO tbl_hieu(tenhieu,hieu_id) VALUE('".$tenhieusp."','".$idhieu."')";
	mysqli_query($mysqli,$sql_them);
	header('Location:../../index.php?action=quanlyhieusp&query=them');
			}
		}
	
}elseif(isset($_POST['suahieusp'])){
	if($tenhieusp==""){
		echo  '<p style="color:red">Tên hiệu không dược để trống</p>';
	}
	//them
	else{
		$sql="select * from tbl_hieu where tenhieu='$tenhieusp'";
			$kt=mysqli_query($mysqli, $sql);

			if(mysqli_num_rows($kt)  > 0){
				echo '<p style="color:red">Tên Hiệu đã tồn tại</p>';
			}
			else{
	
	
	//sua
	$sql_update = "UPDATE tbl_hieu SET tenhieu='".$tenhieusp."',hieu_id='".$idhieu."' WHERE hieu_id='$_GET[hieuid]'";
	mysqli_query($mysqli,$sql_update);
	header('Location:../../index.php?action=quanlyhieusp&query=them');
			}
		}
}else{

	$id=$_GET['hieuid'];
	$sql_xoa = "DELETE FROM tbl_hieu WHERE hieu_id='".$id."'";
	mysqli_query($mysqli,$sql_xoa);
	header('Location:../../index.php?action=quanlyhieusp&query=them');
}

?>