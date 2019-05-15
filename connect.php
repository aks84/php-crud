<?php 

try {
	$db = new PDO("mysql:host=localhost;dbname=phpblog;charset=utf8", "root", "");
} catch (Exception $e) {

	echo $e->getMessage;
	
}






 ?>