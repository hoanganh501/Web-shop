<?php

	$sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
	$query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
	
	    		
?>
<?php
	if(isset($_GET['dangxuat'])&&$_GET['dangxuat']==1){
		unset($_SESSION['dangky']);
	} 
?>
<div class="menu">
			<ul class="list_menu">
				<li><a href="index.php">Trang chủ</a></li>
				<li><a href="index.php?quanly=giohang">Giỏ hàng</a></li>
				<?php
				if(isset($_SESSION['dangky'])){ 

				?>
				<li><a href="index.php?dangxuat=1">Đăng xuất</a></li>
				<li><a href="index.php?quanly=thaydoimatkhau">Tài Khoản</a></li>
				<?php
				}else{ 
				?>
				<li><a href="index.php?quanly=dangky">Đăng ký</a></li> 
				<li><a href="index.php?quanly=dangnhap">Đăng nhập</a></li>
				<?php
				} 
				?>
				<p>
				
			</p>
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
               <form action="index.php?quanly=timkiem" method="POST" class="tim">
					<input type="text" placeholder="Tìm kiếm sản phẩm..." name="tukhoa" id="search">
					<button type="submit" name="timkiem"><i class="fa fa-search" aria-hidden="true"></i></button>
				</form>
				
					
				
			</ul>
			
		</div>



		<style>
		.fa fa-search{
			background-color: #ddd;

		}	
			
	.menu{
		width:100%;
	border:1px solid #ddd;
	height: 60px;
	background:#fff;
	box-shadow: 0px 0px 30px 0px black;
	
}
ul.list_menu {
    padding: 0;
    margin: 0;
	height: 60px;
    width: 60%;
    list-style: none;
    margin: 0 auto;
    line-height: 27px;

}
ul.list_menu li:hover {
    background: #7B7373;
	cursor: pointer;
}
ul.list_menu li a {
    text-decoration: none;
    text-align: center;
    color: #e60000;
}
ul.list_menu li {
    float: left;
    margin-left: 10px;
    margin: 10px;
    padding: 5px 20px;
   
}

		</style>
		<style>
			.tim{
				float:right;
				margin-right:-500px;
			}
			#search{
				padding: 6px;
				height: 10px;
				border-radius: 3px;
	            margin-bottom: 5px;
			}
form.tim input[type=text] {
  font-size: 17px;
  border: 1px solid grey;
  float: left;
  width: 60%;
  background: #f1f1f1;
}

/* Style the submit button */
form.tim button {
  float: left;
  width: 20%;
  padding: 6px;
  background:#7B7373;
  color: white;
  font-size: 10px;
  border: 1px solid grey;
  border-left: none; /* Prevent double borders */
  cursor: pointer;
}

form.tim button:hover {
  background:brown;
}
</style>