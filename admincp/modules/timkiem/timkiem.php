<?php
	if(isset($_POST['timkiem'])){
	$search=$_POST['masp'];
	echo 'Mã tìm kiếm :<strong>'.' '.$search.'</strong><br/>';
	$sql_timkiem="select * from tbl_sanpham,tbl_danhmuc where tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc and masp='".$search."'";
	$row_timkiem=mysqli_query($mysqli,$sql_timkiem);
	$count=mysqli_num_rows($row_timkiem);
	if($count>0){
?>
<h3>Kết quả tìm kiếm</h3>

<table width="100%" border="1">
  <tr>
    <th>Tên sản phẩm</th>
    <th>Hình ảnh</th>
    <th>Giá sp</th>
    <th>Số lượng</th>
    <th>Danh mục</th>
    <th>Mã sp</th>
    <th>Tóm tắt</th>
    <th>Trạng thái</th>
  	<th>Quản lý</th>
  
  </tr>
  <?php
  $i=1;
  while($row=mysqli_fetch_array($row_timkiem)){

  ?>
  <tr>
    
    <td><?php echo $row['tensanpham'] ?></td>
    <td><img src="modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>" width="150px"></td>
    <td><?php echo $row['giasp'] ?></td>
    <td><?php echo $row['soluong'] ?></td>
    <td><?php echo $row['tendanhmuc'] ?></td>
    <td><?php echo $row['masp'] ?></td>
    <td><?php echo $row['tomtat'] ?></td>
    <td><?php $sql_tinhtrang = "select tinhtrang from tbl_sanpham";
	$row_tinhtrang = mysqli_query($mysqli,$sql_tinhtrang);
	$row_tinhtrang=mysqli_fetch_array($row_tinhtrang);
	if($row_tinhtrang['tinhtrang'] == 1 ){
		echo 'Kích hoạt';
	}elseif($row_tinhtrang['tinhtrang'] ==2){
		echo 'Không kích hoạt';
	}
    ?>
    <td>
   		<a href="modules/quanlysp/xuly.php?idsanpham=<?php echo $row['id_sanpham'] ?>">Xoá</a> | <a href="?action=quanlysp&query=sua&idsanpham=<?php echo $row['id_sanpham'] ?>">Sửa</a> 
   	</td>
  </tr>
  <?php
  $i++;
  }
	}else{
	  echo 'Không tìm thấy kết quả';
  }
  }
  ?>
</table>
