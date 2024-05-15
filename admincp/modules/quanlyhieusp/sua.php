<?php
	$sql_sua_hieusp = "SELECT * FROM tbl_hieu WHERE hieu_id='$_GET[hieuid]' LIMIT 1";
	$query_sua_hieusp = mysqli_query($mysqli,$sql_sua_hieusp);
?>
<style>
</style>
<p>Sửa danh mục sản phẩm</p>

 <form method="POST" action="modules/quanlyhieusp/xuly.php?hieuid=<?php echo $_GET['hieuid'] ?>"class="suahieu">
 	<?php
 	while($dong = mysqli_fetch_array($query_sua_hieusp)) {
 	?>
	
	  	<label>Tên danh mục</label>
	  	<input type="text" value="<?php echo $dong['tenhieu'] ?>" name="tenhieu">
	  
	    <input type="submit" name="suahieusp" value="Sửa danh mục sản phẩm">
	  
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
	.suahieu input[type='submit'] {
	padding: 14px;
	width: 12%;

	border-radius: 6px;

	cursor: pointer;
	background:linear-gradient(white,gray);
	color: black;
	margin-left:20px;
	}
	.suahieu input[type='submit'] :hover {
	cursor: pointer;
	color: black;
	
    }
    .suahieu label {
	display: block;
	font-weight: lighter;
	margin-left:20px;
    }
    .suahieu input[type="text"] {
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