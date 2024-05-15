<!DOCTYPE html>
<html lang="en">
<head>
    



	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	
	<style>
	.wrapper{
	width:100%;
	height:auto;
	border:1px solid #CCC;
	margin:auto;
}
i.fa.fa-plus.fa-style {
    font-size: 30px;
    color: #000;
}
i.fa.fa-minus.fa-style {
    font-size: 20px;
    color: #000;
}
i.fa.fa-plus.fa-style:hover {
    color: #7B7373;
}
i.fa.fa-minus.fa-style:hover {
    color: #7B7373;
}
.list_menu{
	width:150%;
	height:45px;
    float: left;
}
.menu{
    width:100%;
}
.wrapper_chitiet{
    height: auto;
    width: 100%;
    margin:0 auto;
}
.hinhanh_sanpham{
    float: left;
    width: 30%;
}
.chitiet_sanpham{
    float: left;
    width: 49%;
    margin:0 10px;
}
input.themgiohang {
    border: none;
    background: brown;
    color: #fff;
    padding: 12px;
    font-size: 15px;
    cursor: pointer;
}
.header{
   
	
	height: 180px;
	width: 100%;
	
}

				ul.product_list {
    padding: 0;
    margin: 4px ;
    list-style: none;
    width: 100%;
}
ul.product_list li img {
    height: 190px;

}
ul.product_list li {
    width: 20%;
    border: 1px solid #000;
    margin: 20px;
    margin-right:30px;
    float: left;
    box-shadow: 0px 2px 10px 0px black;
    background-color: #ddd;
    height: 350px;
}
ul.product_list li a {
    text-decoration: none;
}
ul.product_list li img {
    width: 100%;
}
p.price_product {
    text-align: center;
    color: red;
    font-size: 16px;
    font-weight: bold;
}
p.title_product {
    text-align: center;
    color: #000;
    font-size: 16px;
    font-weight: bold;
}
						ul.list_trang {
						float: center;
					    padding: 0;
					    margin: 0;
					    list-style: none;
					}
					ul.list_trang li {
					    float: left;
					    padding: 5px 13px;
					    margin: 5px;
					    background: burlywood;
					    display: block;
					}
					ul.list_trang li a {
					    color: #000;
					    text-align: center;
					    text-decoration: none;
					}
					 


#main{
	width:100px;
	height:auto;
    margin:auto;
	margin-top:10px;
    background: rgba(128,128,128,0);
}
.content-left{
	width:25%;
	height:auto;

	float:left;
	padding-bottom:10px;
}
.list_sidebar{
	font-size:14px;
    font-weight:bold;
    background:#e60000;
    color:#ddd;
    height:30px;
    line-height:30px;
    text-align:center;

}
.ul.list_sidebar :hover{
    background-color: #7B7373;
}
.content-left ul{
	list-style:none;
	padding:15px;
    background-color: #7B7373;
}
.content-left li{
	padding:10px;
	border-bottom:1px  dotted  #999;

}
.content-left ul:hover{
	color:#7B7373;
}
.content-left a{
	text-decoration:none;
	color:white;
	font-size:14px;
	font-weight:bold;
}
.content-left a:hover{
	color:#960;
}
.maincontent{
	width:74%;
	height:auto;
    
	float:right;
}


ul.brand_list {
    padding: 0;
    margin: 0;
    list-style: none;
    width: 100%;
}
ul.brand_list li img {
    height: 190px;

}
ul.brand_list li {
    width: 19%;
    border: 1px solid #000;
    margin: 5px;
    float: left;
    background-color: #ddd;
    height: 300px;
}
ul.brand_list li a {
    text-decoration: none;
}
ul.brand_list li img {
    width: 100%;
}
p.price_brand {
    text-align: center;
    color: red;
    font-size: 16px;
    font-weight: bold;
}
p.title_brand {
    text-align: center;
    color: #000;
    font-size: 16px;
    font-weight: bold;
}

.clear{
	clear: both;
}
		
	</style>

	
	<title>Web Linh kiện máy tính</title>
	
</head>
<body>
	<div class="wrapper">

		<?php
			session_start();
			include("admincp/config/config.php");
			include("pages/header.php");
			include("pages/menu.php");
			include("pages/main.php");
			include("pages/footer.php");
		?>

	</div>
</body>
</html>