<?php
include "base.php";

// 檢查是否為合法的登入者
if (!isset($_SESSION['login'])) {
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
		body {
			background: #fff;
			overflow: hidden;
		}

		nav {
			background: #fff;
		}

		.logo {
			color: #fff;
		}

		.logo a {
			text-decoration: none
		}

		article {
			display: flex;
			margin-top: 20vh;
			flex-wrap: wrap;
		}

		nav ul li a {
			color: #000 !important;
		}
		article{
			padding: 10vh;
		}
		#left{
		width: 18.2%;
    padding: 2px;
    height: 80vh;
    display: inline-block;
    vertical-align: top;
    position: relative;
    top: -3px;
		}

		.menu{
			display: block;
			font-size: 1.2rem;
			padding: 1vw;
			text-decoration: none;
			text-transform: uppercase;
		}

		.menu:hover{
  background: rgb(255, 117, 117);
  box-shadow: inset -2px -2px 8px rgba(255, 255, 255, 1),
              inset -2px -2px 12px rgba(255, 255, 255, 5),
              inset 2px 2px 4px rgba(255, 255, 255, 0.5),
              inset 2px 2px 8px rgba(0, 0, 0, 0.15);
}
	</style>
</head>

<body>

	<nav>
		<a href="index.php" class="logo">Hollie Chao</a>
		<ul>
			<?php
			if (isset($_SESSION['login'])) {
			?>
				<li><a href="./api/logout.php">logout</a></li>
			<?php
			} else {
			?>
				<li><a href="./front/login.php">login</a></li>
			<?php
			}
			?>
		</ul>
	</nav>


	<article>
		<div id="left">
			<a class="menu" href="?do=add">add</a>
			<a class="menu" href="?do=edit">edit</a>
		</div>


		<div>
			<div class="content">
				<!-- 預防用戶亂塞資料try網站 -->
				<?php
				$do = $_GET['do'] ?? 'add';
				$file = "./back/" . $do . ".php";
				if (file_exists($file)) {
					include $file;
				} else {
					include "./back/add.php";
				}
				?>
			</div>
		</div>
	</article>


	<!-- 上方導覽的JS -->
	<script>
		window.addEventListener('scroll', () => {
			let nav = document.querySelector('nav')
			nav.classList.toggle('sticky', window.scrollY > 0)
		})
	</script>
</body>

</html>