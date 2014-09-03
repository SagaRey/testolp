<?php

	interface StudentDao{

		function get($sid);
	}
	
	class StudentDaoImpl implements StudentDao{

		function __construct(){
		}

		function get($sid){
			include("pdo.php");
			$sql = 'select * from student where sid = ?'; //查询数据
			$stmt = $pdo -> prepare($sql);
			$stmt -> execute(array($sid));
			$result = $stmt -> fetchALL();
			return $result[0];
		}
	}
?>