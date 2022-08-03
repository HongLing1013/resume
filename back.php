<?php 
	include "base.php";

	// 檢查是否為合法的登入者
	if(!isset($_SESSION['login'])){
		to("index.php");
	}
?>