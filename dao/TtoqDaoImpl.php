<?php

	interface TtoqDao{

		function insert($tno, $tqno, $qno);
		function queryByCondition($tno);
	}
	
	class TtoqDaoImpl implements TtoqDao{

		function queryByCondition($tno){
			include("pdo.php");
			$sql = 'select * from ttoq where tno = ?'; //查询数据
			$stmt = $pdo -> prepare($sql);
			$stmt -> execute(array($tno));
			$result = $stmt -> fetchALL();
			return $result;
		}

		function insert($tno, $tqno, $qno){
			include("pdo.php");
			$sql = "insert into ttoq(tno, tqno, qno) values('$tno', '$tqno', '$qno')";
			$result = $pdo -> exec($sql);
			if($result > 0){
				return true;
			}else{
				return false;
			}
		}
	}
?>