<?php

	interface ManagerDao{

		function get($mid);
	}
	
	class ManagerDaoImpl implements ManagerDao{

		function __construct(){
		}

		function get($mid){
			include("pdo.php");
			$sql = 'select * from manager where mid = ?'; //查询数据
			$stmt = $pdo -> prepare($sql);
			$stmt -> execute(array($mid));
			$result = $stmt -> fetchALL();
			return $result[0];
		}
	}
?>