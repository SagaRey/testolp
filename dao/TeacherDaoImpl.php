<?php

	interface TeacherDao{

		function get($tid);
	}
	
	class TeacherDaoImpl implements TeacherDao{

		function __construct(){
		}

		function get($tid){
			include("pdo.php");
			$sql = 'select * from teacher where tid = ?'; //查询数据
			$stmt = $pdo -> prepare($sql);
			$stmt -> execute(array($tid));
			$result = $stmt -> fetchALL();
			return $result[0];
		}
	}
?>