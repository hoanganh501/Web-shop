<p>Thêm User</p>

 <form method="POST" action="modules/quanlyuser/xuly.php" enctype="multipart/form-data" class="themus">
	  
	  	<label>Username</label>
	  	<input type="text" name="username" id="us">
	 
	   
	  	<label>Họ tên</label>
	  	<input type="text" name="name" id="ten">
	  
	 
	  	<label>Mật khảu</label>
	  	<input type="password" name="password" id="pass">
	  
	 
	  	<label>email</label>
	  	<input type="text" name="email" id="mail">
	  
  
	  	<label>điện thoại</label>
	  	<input type="text" name="sdt" id="dt">
	  
	 
	    <label>Tình trạng</label>
	    
	    	<select name="status">
	    		<option value="1">Kích hoạt</option>
	    		<option value="0">Ẩn</option>
	    	</select>
	    
	 
	
	    <label>ROLE</label>
	  
	    	<select name="quyen">
	    		<option value="user">user</option>
	    		<option value="admin">admin</option>
	    	</select>
	    
	 
	  
	    <input type="submit" name="themuser" value="Thêm user" onclick="return check()">
	 
 </form>

<script>
    var username = document.getElementById('us').value;
	var name = document.getElementById('ten').value;
	var password = document.getElementById('pass').value;
	var email = document.getElementById('mail').value;
	var dt = document.getElementById('dt').value;
	function check(){
		
	if(username==" "){
		alert('dien username');
		return false;
	}
	if(name==" "){
		alert('dien ten');
		return false;
	}
	if(password==" "){
		alert('password?????????');
		return false;
	}
	if(email==" "){
		alert('dien mail');
		return false;
	}
	if(dt==" "){
		alert('dien username');
		return false;
	}
	return true;
	}

	
</script>
<style>
	p{
		margin-left:20px;
		font-size: 20px;
		font-family:Arial, Helvetica, sans-serif;
	}
	.themus input[type='submit'] {
	padding: 14px;
	width: 12%;
	border-radius: 6px;
	position: absolute;
	cursor: pointer;
	background:linear-gradient(white,gray);
	color: black;
	margin-left:20px;
	}
	.themus input[type='submit'] :hover {
	cursor: pointer;
	color: black;
	
    }
    .themus label {
	display: block;
	font-weight: lighter;
	margin-left:20px;
    }
    .themus input[type='text'] {
	display: block;
	border-bottom: 2px solid #c36f70;
	border-radius: 3px;
	margin-bottom: 5px;
	background-color: white;
	padding: 5px;
	width: 20%;
	margin-left:20px;
   }
   .themus input[type='password'] {
	display: block;
	border-bottom: 2px solid #c36f70;
	border-radius: 3px;
	margin-bottom: 5px;
	background-color: white;
	padding: 5px;
	width: 20%;
	margin-left:20px;
   }
   .themus input[type='file'] {
	display: block;
	
	border-radius: 3px;
	margin-bottom: 5px;
	
	padding: 5px;
	width: 20%;
	margin-left:20px;
   }
   .themus textarea{
	display: block;
	border-bottom: 2px solid #c36f70;
	border-radius: 3px;
	margin-bottom: 5px;
	background-color: white;
	padding: 5px;
	width: 20%;
	margin-left:20px;
   }
   .themus select{
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

