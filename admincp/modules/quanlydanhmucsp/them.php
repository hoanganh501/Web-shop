<p>Thêm danh mục sản phẩm</p>

 <form method="POST" action="modules/quanlydanhmucsp/xuly.php" class="themdanhmuc">
	  
	  	<label>Tên danh mục</label>
	  	<input type="text" name="tendanhmuc" id="tendm">
	  
	   
	    <input type="submit" name="themdanhmuc" value="Thêm danh mục sản phẩm" onclick="return checkdm()">
	  
 </form>

<script>
    var tendanhmuc = document.getElementById('tendm').value;
	
	function checkdm(){
		
	if(tendanhmuc==" "){
		alert('xin hãy diền tên danh mục');
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
	.themdanhmuc input[type='submit'] {
	padding: 14px;
	width: 12%;
	border-radius: 6px;
	position: absolute;
	cursor: pointer;
	background:linear-gradient(white,gray);
	color: black;
	margin-left:20px;
	}
	.themdanhmuc input[type='submit'] :hover {
	cursor: pointer;
	color: black;
	
    }
    .themdanhmuc label {
	display: block;
	font-weight: lighter;
	margin-left:20px;
    }
    .themdanhmuc input[type='text'] {
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