<?php
	$sql_sua_sp = "SELECT * FROM tbl_sanpham WHERE id_sanpham='$_GET[idsanpham]' LIMIT 1";
	$query_sua_sp = mysqli_query($mysqli,$sql_sua_sp);
?>
<p>Sửa sản phẩm</p>

<?php
while($row = mysqli_fetch_array($query_sua_sp)){
?>
 <form method="POST" action="modules/quanlysp/xuly.php?idsanpham=<?php echo $row['id_sanpham'] ?>" enctype="multipart/form-data" class="suasp">
	
	  	<label>Tên sản phẩm</label>
	  	<input type="text" value="<?php echo $row['tensanpham'] ?>" name="tensanpham">
	 
	  
	  	<label>Mã sp</label>
	  	<input type="text" value="<?php echo $row['masp'] ?>" name="masp">
	  
	  
	  	<label>Giá sp</label>
	  	<input type="text" value="<?php echo $row['giasp'] ?>" name="giasp">
	 
	  
	  	<label>Số lượng</label>
	  	<input type="text" value="<?php echo $row['soluong'] ?>" name="soluong">
	 
	   
	  	<label>Hình ảnh</label>
	  	
	  		<input type="file" name="hinhanh">
	  		<img src="modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>" width="150px" >
	  	

	  
	  
	  	<label>Tóm tắt</label>
	  	<textarea rows="10"  name="tomtat" style="resize: none"><?php echo $row['tomtat'] ?></textarea>
	
	   
	  	<label>Nội dung</label>
	  	<textarea rows="10"  name="noidung" style="resize: none"><?php echo  $row['noidung'] ?></textarea>
	  
	 
	    <label>Danh mục sản phẩm</label>
	    
	    	<select name="danhmuc">
	    		<?php
	    		$sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
	    		$query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
	    		while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
	    			if($row_danhmuc['id_danhmuc']==$row['id_danhmuc']){
	    		?>
	    		<option selected value="<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></option>
	    		<?php
	    			}else{
	    		?>
	    		<option value="<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></option>
	    		<?php
	    			}
	    		} 
	    		?>
	    	</select>
	    
	  

	 
	    <label>hiệu sản phẩm</label>
	   
	    	<select name="hieu">
	    		<?php
	    		$sql_hieusp = "SELECT * FROM tbl_hieu ORDER BY hieu_id DESC";
	    		$query_hieusp = mysqli_query($mysqli,$sql_hieusp);
	    		while($row_hieusp = mysqli_fetch_array($query_hieusp)){
	    			if($row_hieusp['hieu_id']==$row['hieu_id']){
	    		?>
	    		<option selected value="<?php echo $row_hieusp['hieu_id'] ?>"><?php echo $row_hieusp['tenhieu'] ?></option>
	    		<?php
	    			}else{
	    		?>
	    		<option value="<?php echo $row_hieusp['hieu_id'] ?>"><?php echo $row_hieusp['tenhieu'] ?></option>
	    		<?php
	    			}
	    		} 
	    		?>
	    	</select>
	   
	 

	 
	    <label>Tình trạng</label>
	   
	    	<select name="tinhtrang">
	    		<?php
	    		if($row['tinhtrang']==1){ 
	    		?>
	    		<option value="1" selected>Kích hoạt</option>
	    		<option value="0">Ẩn</option>
	    		<?php
	    		}else{ 
	    		?>
	    		<option value="1">Kích hoạt</option>
	    		<option value="0" selected>Ẩn</option>
	    		<?php
	    		} 
	    		?>

	    	</select>
	    
	 
	   
	    <input type="submit" name="suasanpham" value="Sửa sản phẩm">
	  
 </form>
 <?php
 } 
 ?>

</table>

<style>
	p{
		margin-left:20px;
		font-size: 20px;
		font-family:Arial, Helvetica, sans-serif;
	}
	.suasp input[type='submit'] {
	padding: 14px;
	width: 12%;
	border-radius: 6px;
	
	cursor: pointer;
	background:linear-gradient(white,gray);
	color: black;
	margin-left:20px;
	}
	.suasp input[type='submit'] :hover {
	cursor: pointer;
	color: black;
	
    }
    .suasp label {
	display: block;
	font-weight: lighter;
	margin-left:20px;
    }
    .suasp input[type='text'] {
	display: block;
	border-bottom: 2px solid #c36f70;
	border-radius: 3px;
	margin-bottom: 5px;
	background-color: white;
	padding: 5px;
	width: 20%;
	margin-left:20px;
   }
   .suasp input[type='file'] {
	display: block;
	
	border-radius: 3px;
	margin-bottom: 5px;
	
	padding: 5px;
	width: 20%;
	margin-left:20px;
   }
   .suasp textarea{
	display: block;
	border-bottom: 2px solid #c36f70;
	border-radius: 3px;
	margin-bottom: 5px;
	background-color: white;
	padding: 5px;
	width: 20%;
	margin-left:20px;
   }
   .suasp select{
	display: block;
	border-bottom: 2px solid #c36f70;
	border-radius: 3px;
	margin-bottom: 5px;
	background-color: white;
	padding: 5px;
	width: 20%;
	margin-left:20px;
   }
</style>