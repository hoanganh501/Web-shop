<p>Thêm danh mục sản phẩm</p>

 <form method="POST" action="modules/quanlyhieusp/xuly.php" onsubmit="return checkh()" class="themhieu">
	  
	  	<label>Tên hiệu</label>
	  	<input type="text" name="tenhieu" id="tenh">

	  
	   
	    <input type="submit" name="themhieusp" value="Thêm hiệu sản phẩm" >
	 
 </form>
</table>
<script>
    var tenhieu = document.getElementById('tenh').value;
	
	function checkh(){
		
	if(tenhieu==" "){
		alert('xin hãy diền tên hiệu');
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
	.themhieu input[type='submit'] {
	padding: 14px;
	width: 12%;
	border-radius: 6px;
	position: absolute;
	cursor: pointer;
	background:linear-gradient(white,gray);
	color: black;
	margin-left:20px;
	}
	.themhieu input[type='submit'] :hover {
	cursor: pointer;
	color: black;
	
    }
    .themhieu label {
	display: block;
	font-weight: lighter;
	margin-left:20px;
    }
    .themhieu input[type='text'] {
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