<?php
	$sql_lietke_sp = "SELECT * FROM tbl_sanpham,tbl_danhmuc,tbl_hieu WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc AND tbl_sanpham.brand=tbl_hieu.hieu_id ORDER BY id_sanpham DESC";
	$query_lietke_sp = mysqli_query($mysqli,$sql_lietke_sp);
?>
<p id="lk3">Liệt kê danh mục sản phẩm</p>
<form action="index.php?action=timkiem&query=sp" method="post" enctype="multipart/form-data">
     <p><input type="text" name="masp" placeholder="Nhập mã sản phẩm..." id="timkiem" required="required" />
        <input type="submit" id="button_timkiem" name="timkiem" value="Tìm sản phẩm" />
        </p>
        </form>
<table style="width:100%" border="1" style="border-collapse: collapse;" class="sp">
  <tr>
  	
    <th>Tên sản phẩm</th>
    <th>Hiệu sản phẩm</th>
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
  $i = 0;
  while($row = mysqli_fetch_array($query_lietke_sp)){

  ?>
  <tr>
  	
    <td><?php echo $row['tensanpham'] ?></td>
    <td><?php echo $row['tenhieu'] ?></td>
    <td><img src="modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>" width="150px"></td>
    <td><?php echo $row['giasp'] ?></td>
    <td><?php echo $row['soluong'] ?></td>
    <td><?php echo $row['tendanhmuc'] ?></td>
    <td><?php echo $row['masp'] ?></td>
    <td><?php echo $row['tomtat'] ?></td>
    <td><?php if($row['tinhtrang']==1){
        echo 'Kích hoạt';
      }else{
        echo 'Ẩn';
      } 
      ?>
      
    </td>
   	<td>
   		<a onclick="return window.confirm('bạn có muốn xóa không???');" href="modules/quanlysp/xuly.php?idsanpham=<?php echo $row['id_sanpham']  ?>">Xoá</a> | <a href="?action=quanlysp&query=sua&idsanpham=<?php echo $row['id_sanpham'] ?>">Sửa</a> 
   	</td>
   
  </tr>
  <?php
  } 
  ?>
 
</table>
<script>
function confirmDelete(delUrl) {
  if (confirm("Bạn có chắc chắn xóa không ?")) {
    document.location = delUrl;
  }
}
</script>
<style>
  #lk3{
    margin-left:20px;
    padding: 5px;
    margin-top: 100px;
    border:none;
  }
  .sp tr th{
    border-radius: 6px;
    text-align: center;
    color:crimson;
    background-color:bisque;

  }
  .sp tr td{
    border-radius: 2px;
    text-align: center;
    color:brown;
    background-color:white;

  }
</style>