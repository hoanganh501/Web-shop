<?php
	$sql_sua_user = "SELECT * FROM tbl_dangky WHERE id='$_GET[iduser]'";
	$query_sua_user = mysqli_query($mysqli,$sql_sua_user);
?>
<p>Sửa Thông tin người dùng</p>

<?php
while($row = mysqli_fetch_array($query_sua_user)) {
?>
<form method="POST" action="modules/quanlyuser/xuly.php?iduser=<?php echo $row['id'] ?>" enctype="multipart/form-data" class="suaus">

	  	<label>Username</label>
	  	<input type="text" value="<?php echo $row['username'] ?>" name="username">
	  
	  	<label>Họ tên</label>
	  	<input type="text" value="<?php echo $row['hoten'] ?>" name="name" >
	  
	  	<label>Mật khảu</label>
	  	<input type="password" value="" name="password">
	 
	  	<label>email</label>
	  	<input type="text" value="<?php echo $row['email'] ?>" name="email" >
	 
	 
	  	<label>điện thoại</label>
	    <input type="text" value="<?php echo $row['dienthoai'] ?>" name="sdt" >
	
	    <label>Tình trạng</label>
	 
	    	<select name="status">
	    		<?php
	    		if($row['status']==1){ 
	    		?>
	    		<option value="1" selected>Kích hoạt</option>
	    		<option value="0">banned</option>
	    		<?php
	    		}else{ 
	    		?>
	    		<option value="1">Kích hoạt</option>
	    		<option value="0" selected>banned</option>
	    		<?php
	    		} 
	    		?>

	    	</select>
		<label>ROLE</label>
	 
	    	<select name="quyen">
	    		<?php
	    		if($row['ROLE']=='user'){ 
	    		?>
	    		<option value="user" selected>user</option>
	    		<option value="admin">admin</option>
	    		<?php
	    		}else{ 
	    		?>
	    		<option value="admin">admin</option>
	    		<option value="user" selected>user</option>
	    		<?php
	    		} 
	    		?>

	    	</select>

	
	  
	    <input type="submit" name="suauser" value="Sửa user">
	
 </form>
 <?php
 } 
 ?>



<style>
	p{
		margin-left:20px;
		font-size: 20px;
		font-family:Arial, Helvetica, sans-serif;
	}
	.suaus input[type='submit'] {
	padding: 14px;
	width: 12%;
	border-radius: 6px;
	
	cursor: pointer;
	background:linear-gradient(white,gray);
	color: black;
	margin-left:20px;
	}
	.suaus input[type='submit'] :hover {
	cursor: pointer;
	color: black;
	
    }
    .suaus label {
	display: block;
	font-weight: lighter;
	margin-left:20px;
    }
    .suaus input[type='text'] {
	display: block;
	border-bottom: 2px solid #c36f70;
	border-radius: 3px;
	margin-bottom: 5px;
	background-color: white;
	padding: 5px;
	width: 20%;
	margin-left:20px;
   }
   .suaus input[type='password'] {
	display: block;
	border-bottom: 2px solid #c36f70;
	border-radius: 3px;
	margin-bottom: 5px;
	background-color: white;
	padding: 5px;
	width: 20%;
	margin-left:20px;
   }
   .suaus select{
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
