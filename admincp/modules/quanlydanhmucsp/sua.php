<?php
	$sql_sua_danhmucsp = "SELECT * FROM tbl_danhmuc WHERE id_danhmuc='$_GET[iddanhmuc]' LIMIT 1";
	$query_sua_danhmucsp = mysqli_query($mysqli,$sql_sua_danhmucsp);
?>
<style>
</style>
<p>Sửa danh mục sản phẩm</p>

 <form method="POST" action="modules/quanlydanhmucsp/xuly.php?iddanhmuc=<?php echo $_GET['iddanhmuc'] ?>" class="suadanhmuc">
 	<?php
 	while($dong = mysqli_fetch_array($query_sua_danhmucsp)) {
 	?>
	  
	  	<label>Tên danh mục</label>
	  	<input type="text" value="<?php echo $dong['tendanhmuc'] ?>" name="tendanhmuc">
	
	   
	    <input type="submit" name="suadanhmuc" value="Sửa danh mục sản phẩm">
	
	  <?php
	  } 
	  ?>

 </form>

<style>
  p{
		margin-left:20px;
		font-size: 20px;
		font-family:Arial, Helvetica, sans-serif;
	}
	.suadanhmuc input[type='submit'] {
	padding: 14px;
	width: 12%;
	border-radius: 6px;

	cursor: pointer;
	background:linear-gradient(white,gray);
	color: black;
	margin-left:20px;
	}
	.suadanhmuc input[type='submit'] :hover {
	cursor: pointer;
	color: black;
	
    }
    .suadanhmuc label {
	display: block;
	font-weight: lighter;
	margin-left:20px;
    }
    .suadanhmuc input[type="text"] {
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