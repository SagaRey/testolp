<?php
	//PDO连接MySQL数据库
	$dbms = 'mysql';
	// $dbname = 'lXYxpWjStzxEezVVWkvI';
	// $user = 'Hhx4EEjWQc7GLZ1180DTar12';
	// $password = 'R8YM8EHC36cl4xaGMdSirajFC7Fixz43';
	// $host = 'sqld.duapp.com';
	// $port = '4050';
	$dbname = 'testol';
	$user = 'adminJH2jQv5';
	$password = 'DHfIE7NycCs9';
	$host = '127.8.136.130';
	$port = '3306';
	$dsn = "$dbms:host=$host;port=$port;dbname=$dbname"; //Data Source Name 若更改过默认数据库端口，需加上端口号
	try {
		$pdo = new PDO($dsn, $user, $password);
		$pdo -> exec("SET NAMES 'utf8'"); //解决数据库为UTF-8时的中文乱码问题
	} catch (Exception $e) {
		echo $e -> getMessage();
	}
?>