<?php
include('../../config/config.php');

$tensanpham = $_POST['tensanpham'];
$masp = $_POST['masp'];
$giasp = $_POST['giasp'];
$soluong = $_POST['soluong'];
$brand = $_POST['hieu'];
//xuly hinh anh
$hinhanh = $_FILES['hinhanh']['name'];
$hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
$tomtat = $_POST['tomtat'];
$noidung = $_POST['noidung'];
$tinhtrang = $_POST['tinhtrang'];
$danhmuc = $_POST['danhmuc'];


if(isset($_POST['themsanpham'])){
	//themif(isset($_POST['themdanhmuc'])){
	if($tensanpham==" "||$giasp==" "||$soluong==" "){
		echo  '<p style="color:red">Tên sản phẩm không dược để trống</p>';
	}
	//them
	else{
		$sql="select * from tbl_sanpham where tensanpham='$tensanpham'";
			$kt=mysqli_query($mysqli, $sql);

			if(mysqli_num_rows($kt)  > 0){
				echo '<p style="color:red">Tên sản phẩm đã tồn tại</p>';
			}
			else{
	$sql_them = "INSERT INTO tbl_sanpham(tensanpham,brand,masp,giasp,soluong,hinhanh,tomtat,noidung,tinhtrang,id_danhmuc) VALUE('".$tensanpham."','".$brand."','".$masp."','".$giasp."','".$soluong."','".$hinhanh."','".$tomtat."','".$noidung."','".$tinhtrang."','".$danhmuc."')";
	mysqli_query($mysqli,$sql_them);
	move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
	
	header('Location:../../index.php?action=quanlysp&query=them');
			}
		}
}elseif(isset($_POST['suasanpham'])){
	
	//sua
	if($hinhanh!=''){
		
		$path = "images/"; 
		move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh); 
  $allowtypes    = array('jpg', 'png', 'jpeg', 'gif');
		$sql_update = "UPDATE tbl_sanpham SET tensanpham='".$tensanpham."',brand='".$brand."',masp='".$masp."',giasp='".$giasp."',soluong='".$soluong."',hinhanh='".$hinhanh."',tomtat='".$tomtat."',noidung='".$noidung."',tinhtrang='".$tinhtrang."',id_danhmuc='".$danhmuc."' WHERE id_sanpham='$_GET[idsanpham]'";
		//xoa hinh anh cu
		$sql = "SELECT * FROM tbl_sanpham WHERE id_sanpham = '$_GET[idsanpham]' LIMIT 1";
		$query = mysqli_query($mysqli,$sql);
		while($row = mysqli_fetch_array($query)){
			unlink('uploads/'.$row['hinhanh']);
		}

	}else{
		$sql_update = "UPDATE tbl_sanpham SET tensanpham='".$tensanpham."',brand='".$brand."',masp='".$masp."',giasp='".$giasp."',soluong='".$soluong."',tomtat='".$tomtat."',noidung='".$noidung."',tinhtrang='".$tinhtrang."',id_danhmuc='".$danhmuc."' WHERE id_sanpham='$_GET[idsanpham]'";
	}
	mysqli_query($mysqli,$sql_update);
		header('Location:../../index.php?action=quanlysp&query=them');
}else{
	$id=$_GET['idsanpham'];
	$sql = "SELECT * FROM tbl_sanpham WHERE id_sanpham = '$id' LIMIT 1";
	$query = mysqli_query($mysqli,$sql);
	while($row = mysqli_fetch_array($query)){
		unlink('uploads/'.$row['hinhanh']);
	}
	$sql_xoa = "DELETE FROM tbl_sanpham WHERE id_sanpham='".$id."'";
	mysqli_query($mysqli,$sql_xoa);
	header('Location:../../index.php?action=quanlysp&query=them');
}

?>