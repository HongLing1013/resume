<?php
// include "base.php";
?>

<!-- 正確的作法 -->
<?php
if(isset($_SESSION['login'])){
	to('back.php');
}
?>

<!-- 寫死 -->
<?php
// if(isset($_POST['acc'])){//如果有傳來acc的值 就是要做登入的動作
// 	if($_POST['acc']=='admin' && $_POST['pw']=="1234"){
// 		to("back.php");
// 	}else{
// 		echo "<script>";
// 		echo "alert('帳號或密碼錯誤')";
// 		echo "</script>";
// 	}
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		body{
			background: url(https://picsum.photos/id/1056/3988/2720);
			background-repeat: no-repeat;
			display: flex;
			justify-content:center;
			margin-top: 25vh;
		}
		main{
			background-color: #fff5;
			display: flex;
			text-align: center;
			align-items: center;
			padding: 10vh;
			border: 1px solid #6663;
			border-radius: 5px;
		}
		input{
			border-radius: 2px;
			border: 1px solid #6663;
			background: transparent;
		}
	</style>
</head>
<body>
	<main>
		<!--正中央-->
		<form method="post" action="../api/login.php">
			<h1>管理員登入</h1>
			<hr>
			<br>
			<p>帳號 ： <input name="acc" autofocus="" type="text"></p>
			<p>密碼 ： <input name="pw" type="password"></p>
			<div><input value="送出" type="submit"><input type="reset" value="清除"></div>
		</form>
	</main>
</body>
</html>


