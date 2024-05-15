<?php
	$sql_lietke_danhmucsp = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
	$query_lietke_danhmucsp = mysqli_query($mysqli,$sql_lietke_danhmucsp);
?>
<p id="lk1">Liệt kê danh mục sản phẩm</p>
<table style="width:100%" border="0" style="border-collapse: collapse;float:right" class="danhmuc">
  <tr>
  
  	<th>Id</th>
    <th>Tên danh mục</th>
  	<th>Quản lý</th>
  
  </tr>
  <?php
  $i = 0;
  while($row = mysqli_fetch_array($query_lietke_danhmucsp)){
  	$i++;
  ?>
  <tr>
  
    <td><?php echo $row['id_danhmuc'] ?></td>
    <td><?php echo $row['tendanhmuc'] ?></td>
   	<td>
   		<a href="modules/quanlydanhmucsp/xuly.php?iddanhmuc=<?php echo $row['id_danhmuc'] ?>">Xoá</a> | <a href="?action=quanlydanhmucsanpham&query=sua&iddanhmuc=<?php echo $row['id_danhmuc'] ?>">Sửa</a> 
   	</td>
   
  </tr>
  <?php
  } 
  ?>
 
</table>
<style>
  #lk1{
    margin-left:20px;
    padding: 5px;
    margin-top: 100px;
    border:none;
  }
  .danhmuc tr th{
    border-radius: 6px;
    text-align: center;
    color:crimson;
    background-color:bisque;

  }
  .danhmuc tr td{
    border-radius: 6px;
    text-align: center;
    color:brown;
    background-color:white;

  }
</style>