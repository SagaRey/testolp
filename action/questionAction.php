<?php
	
	$action = $_POST['action']?$_POST['action']:$_GET['action'];

	switch ($action) {

		case 'queryall':
			queryAll();
			break;

		case 'querybycondition':
			queryByCondition();
			break;

		case 'insert':
			insert();
			break;

		case 'update':
			update();
			break;

		case 'delete':
			delete();
			break;
		
		default:
			queryAll();
			break;
	}

	function queryAll(){
		include('../dao/QuestionDaoImpl.php');
		$questionDao = new QuestionDaoImpl();
		$questions = $questionDao -> queryAll();
		session_start();
		$_SESSION['questions'] = $questions;
		header('Location: /teacher/question.php');
	}

	function queryByCondition(){
		$subject = $_POST['subject'];
		$type = $_POST['type'];
		$difficulty = $_POST['difficulty'];
		$keyword = $_POST['keyword'];
		include('../dao/QuestionDaoImpl.php');
		$questionDao = new QuestionDaoImpl();
		$questions = $questionDao -> queryByCondition($subject, $type, $difficulty, $keyword);
		session_start();
		$_SESSION['questions'] = $questions;
		header('Location: /teacher/question.php');
	}

	function insert(){
		$qno = $_POST['qno'];
		$subject = $_POST['subject'];
		$type = $_POST['type'];
		$difficulty = $_POST['difficulty'];
		$point = $_POST['point'];
		$question = $_POST['question'];
		$a = $_POST['a'];
		$b = $_POST['b'];
		$c = $_POST['c'];
		$d = $_POST['d'];
		$e = $_POST['e'];
		$f = $_POST['f'];
		$g = $_POST['g'];
		$h = $_POST['h'];
		$i = $_POST['i'];
		$j = $_POST['j'];
		$k = $_POST['k'];
		$l = $_POST['l'];
		$m = $_POST['m'];
		$n = $_POST['n'];
		include('../dao/QuestionDaoImpl.php');
		$questionDao = new QuestionDaoImpl();
		$result = $questionDao -> insert($qno, $subject, $type, $difficulty, $point, $question, $a, $b, $c, $d, $e, $f, $g, $h, $i, $j, $k, $l, $m, $n);
		$questions = $questionDao -> queryAll();
		session_start();
		$_SESSION['questions'] = $questions;
		$_SESSION['qno'] = $qno;
		header('Location: /teacher/question.php');
	}

	function update(){
		$id = $_POST['id'];
		$difficulty = $_POST['difficulty'];
		$point = $_POST['point'];
		$question = $_POST['question'];
		$a = $_POST['a'];
		$b = $_POST['b'];
		$c = $_POST['c'];
		$d = $_POST['d'];
		$e = $_POST['e'];
		$f = $_POST['f'];
		$g = $_POST['g'];
		$h = $_POST['h'];
		$i = $_POST['i'];
		$j = $_POST['j'];
		$k = $_POST['k'];
		$l = $_POST['l'];
		$m = $_POST['m'];
		$n = $_POST['n'];
		include('../dao/QuestionDaoImpl.php');
		$questionDao = new QuestionDaoImpl();
		$result = $questionDao -> update($id, $difficulty, $point, $question, $a, $b, $c, $d, $e, $f, $g, $h, $i, $j, $k, $l, $m, $n);
		$questions = $questionDao -> queryAll();
		session_start();
		$_SESSION['questions'] = $questions;
		header('Location: /teacher/question.php');
	}

	function delete(){
		$qnos = $_POST['qnos'];
		$qnos = explode('@', $qnos);
		include('../dao/QuestionDaoImpl.php');
		$questionDao = new QuestionDaoImpl();
		for($i = 0; $i < count($qnos); $i ++){
			$result = $questionDao -> delete($qnos[$i]);
		}
		$questions = $questionDao -> queryAll();
		session_start();
		$_SESSION['questions'] = $questions;
		header('Location: /teacher/question.php');
	}
?>