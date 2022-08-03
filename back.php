<?php 
	include "base.php";

	// 檢查是否為合法的登入者
	if(!isset($_SESSION['login'])){
		to("index.php");
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="style.css">
	<style>
		body{
			background: #666;
		}
		nav{
			background: #666;
		}
		.logo{
			color: #fff;
		}
		a{
			text-decoration:none
		}
		
		.center{
			padding: 10vh;
			margin: 0 auto;
			background: #fff5;
			width: 80vw;
			height: 95vh;
		}
		.center h1{
			line-height: 13vh;
			text-align: center;
		}
	</style>
</head>
<body>

	<nav>
		<ul>
			<li><a href="index.php" class="logo">Hollie Chao</a></li>
		</ul>
	</nav>

	<div class="center">
		<h1>作品管理</h1>
		<input type="text" name="img" id="img">
	</div>

</body>
</html>