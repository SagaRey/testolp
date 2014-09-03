<?php

	interface QuestionDao{

		function get($qno);
		function delete($qno);
		function queryAll();
		function queryByCondition($subject, $type, $difficulty, $keyword);
	}
	
	class QuestionDaoImpl implements QuestionDao{

		function __construct(){
		}

		function get($qno){
			include("pdo.php");
			$sql = 'select * from question where qno = ?'; //查询数据
			$stmt = $pdo -> prepare($sql);
			$stmt -> execute(array($qno));
			$result = $stmt -> fetchALL();
			return $result[0];
		}

		function queryAll(){
			include("pdo.php");
			$sql = 'select * from question'; //查询数据
			$stmt = $pdo -> query($sql);
			$result = $stmt -> fetchALL();
			return $result;
		}


		function queryByCondition($subject, $type, $difficulty, $keyword){
			include("pdo.php");
			$subject = '%'.$subject.'%';
			$type = '%'.$type.'%';
			$difficulty = '%'.$difficulty.'%';
			$keyword = '%'.$keyword.'%';
			$sql = 'select * from question where subject like ? and type like ? and difficulty like ? and question like ?'; //查询数据
			$stmt = $pdo -> prepare($sql);
			$stmt -> execute(array($subject, $type, $difficulty, $keyword));
			$result = $stmt -> fetchALL();
			return $result;
		}

		function insert($qno, $subject, $type, $difficulty, $point, $question, $a, $b, $c, $d, $e, $f, $g, $h, $i, $j, $k, $l, $m, $n){
			include("pdo.php");
			$sql = "insert into question(qno, subject, type, difficulty, point, question, optionA, optionB, optionC, optionD, optionE, optionF, optionG, optionH, optionI, optionJ, optionK, optionL, optionM, optionN) values('$qno', '$subject', '$type', '$difficulty', '$point', '$question', '$a', '$b', '$c', '$d', '$e', '$f', '$g', '$h', '$i', '$j', '$k', '$l', '$m', '$n')";
			$result = $pdo -> exec($sql);
			if($result > 0){
				return true;
			}else{
				return false;
			}
		}

		function update($id, $difficulty, $point, $question, $a, $b, $c, $d, $e, $f, $g, $h, $i, $j, $k, $l, $m, $n){
			include("pdo.php");
			$sql = "update question set difficulty = '$difficulty', point = '$point', question = '$question', optionA = '$a', optionB = '$b', optionC = '$c', optionD = '$d', optionE = '$e', optionF = '$f', optionG = '$g', optionH = '$h', optionI = '$i', optionJ = '$j', optionK = '$k', optionL = '$l', optionM = '$m', optionN = '$n' where id = $id"; //删除数据
			echo $sql;
			$result = $pdo -> exec($sql);
			if($result > 0){
				return true;
			}else{
				return false;
			}
		}

		function delete($qno){
			include("pdo.php");
			$sql = 'delete from question where qno = '.$qno; //删除数据
			$result = $pdo -> exec($sql);
			if($result > 0){
				return true;
			}else{
				return false;
			}
		}
	}
?>