<p>Thêm sản phẩm</p>


 <form method="POST" action="modules/quanlysp/xuly.php" enctype="multipart/form-data" class="themsp">
	
	  	<label>Tên sản phẩm</label>
	  	<input type="text" name="tensanpham" id="tensp">
	 
	  
	  	<label>Mã sp</label>
	  	<input type="text" name="masp" id="idsp">
	
	
	  	<label>Giá sp</label>
	  	<input type="text" name="giasp" id="gia">
	  
	
	  	<label>Số lượng</label>
        <input type="text" name="soluong" id="sl">
	
	 
	  	<label>Hình ảnh</label>
	  	<input type="file" name="hinhanh" id="img">
	
	
	  	<label>Tóm tắt</label>
	  	<textarea rows="10"  name="tomtat" style="resize: none"></textarea>
	  
	 
	  	<label>Nội dung</label>
	  	<textarea rows="10"  name="noidung" style="resize: none"></textarea>
	  
	
	    <label>Danh mục sản phẩm</label>
	   
	    	<select name="danhmuc">
	    		<?php
	    		$sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
	    		$query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
	    		while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
	    		?>
	    		<option value="<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></option>
	    		<?php
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
	    		<option value="1">Kích hoạt</option>
	    		<option value="0">Ẩn</option>
	    	</select>
	    
	 
	   
	    <input type="submit" name="themsanpham" value="Thêm sản phẩm" onclick="return checksp()">
	 
 </form>
</table>




	<style>
	p{
		margin-left:20px;
		font-size: 20px;
		font-family:Arial, Helvetica, sans-serif;
	}
	.themsp input[type='submit'] {
	padding: 14px;
	width: 12%;
	border-radius: 6px;
	position: absolute;
	cursor: pointer;
	background:linear-gradient(white,gray);
	color: black;
	margin-left:20px;
	}
	.themsp input[type='submit'] :hover {
	cursor: pointer;
	color: black;
	
    }
    .themsp label {
	display: block;
	font-weight: lighter;
	margin-left:20px;
    }
    .themsp input[type='text'] {
	display: block;
	border-bottom: 2px solid #c36f70;
	border-radius: 3px;
	margin-bottom: 5px;
	background-color: white;
	padding: 5px;
	width: 20%;
	margin-left:20px;
   }
   .themsp input[type='file'] {
	display: block;
	
	border-radius: 3px;
	margin-bottom: 5px;
	
	padding: 5px;
	width: 20%;
	margin-left:20px;
   }
   .themsp textarea{
	display: block;
	border-bottom: 2px solid #c36f70;
	border-radius: 3px;
	margin-bottom: 5px;
	background-color: white;
	padding: 5px;
	width: 20%;
	margin-left:20px;
   }
   .themsp select{
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