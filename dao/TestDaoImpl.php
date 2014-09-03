<?php

	interface TestDao{

		function get($tno);
		function queryAll();
		function insert($tno, $subject, $tid, $quantity, $difficulty, $total);
	}
	
	class TestDaoImpl implements TestDao{

		function __construct(){
		}

		function get($tno){
			include("pdo.php");
			$sql = 'select * from test where tno = ?'; //查询数据
			$stmt = $pdo -> prepare($sql);
			$stmt -> execute(array($tno));
			$result = $stmt -> fetchALL();
			return $result[0];
		}

		function queryAll(){
			include("pdo.php");
			$sql = 'select * from test'; //查询数据
			$stmt = $pdo -> query($sql);
			$result = $stmt -> fetchALL();
			return $result;
		}

		function insert($tno, $subject, $tid, $quantity, $difficulty, $total){
			include("pdo.php");
			$sql = "insert into test(tno, subject, tid, quantity, difficulty, total) values('$tno', '$subject', '$tid', '$quantity', '$difficulty', '$total')";
			$result = $pdo -> exec($sql);
			if($result > 0){
				return true;
			}else{
				return false;
			}
		}
	}
?>