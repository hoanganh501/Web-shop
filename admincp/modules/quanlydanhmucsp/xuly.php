<?php
include('../../config/config.php');

$tenloaisp = $_POST['tendanhmuc'];

if(isset($_POST['themdanhmuc'])){
	if($tenloaisp==""){
		echo  '<p style="color:red">Tên danh mục không dược để trống</p>';
	}
	//them
	else{
		$sql="select * from tbl_danhmuc where tendanhmuc='$tenloaisp'";
			$kt=mysqli_query($mysqli, $sql);

			if(mysqli_num_rows($kt)  > 0){
				echo '<p style="color:red">Tên danh mục đã tồn tại</p>';
			}
			else{
	
	$sql_them = "INSERT INTO tbl_danhmuc(tendanhmuc,id_danhmuc) VALUE('".$tenloaisp."','".$thutu."')";
	$query_them=mysqli_query($mysqli,$sql_them);
	
	header('Location:../../index.php?action=quanlydanhmucsanpham&query=them');
			}
		}
}elseif(isset($_POST['suadanhmuc'])){
	//sua
	if($tenloaisp==""){
		echo  '<p style="color:red">Tên danh mục không dược để trống</p>';
	}
	//them
	else{
		$sql="select * from tbl_danhmuc where tendanhmuc='$tenloaisp'";
			$kt=mysqli_query($mysqli, $sql);

			if(mysqli_num_rows($kt)  > 0){
				echo '<p style="color:red">Tên danh mục đã tồn tại</p>';
			}
			else{
	$sql_update = "UPDATE tbl_danhmuc SET tendanhmuc='".$tenloaisp."',id_danhmuc='".$thutu."' WHERE id_danhmuc='$_GET[iddanhmuc]'";
	mysqli_query($mysqli,$sql_update);
	header('Location:../../index.php?action=quanlydanhmucsanpham&query=them');
			}
		}
}else{

	$id=$_GET['iddanhmuc'];
	$sql_xoa = "DELETE FROM tbl_danhmuc WHERE id_danhmuc='".$id."'";
	mysqli_query($mysqli,$sql_xoa);
	header('Location:../../index.php?action=quanlydanhmucsanpham&query=them');
}

?>