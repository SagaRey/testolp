<?php
	
	$action = $_POST['action']?$_POST['action']:$_GET['action'];

	switch ($action) {

		case 'queryall':
			queryAll();
			break;

		case 'get':
			get();
			break;

		case 'insert':
			insert();
			break;
		
		default:
			queryAll();
			break;
	}

	function queryAll(){
		include('../dao/TestDaoImpl.php');
		$testDao = new testDaoImpl();
		$tests = $testDao -> queryAll();
		session_start();
		$_SESSION['tests'] = $tests;
		header('Location: /teacher/test.php');
	}

	function get(){
		$tno = $_GET['tno'];
		$questions = array();
		include('../dao/QuestionDaoImpl.php');
		$questionDao = new QuestionDaoImpl();
		include('../dao/TestDaoImpl.php');
		$testDao = new testDaoImpl();
		include('../dao/TtoqDaoImpl.php');
		$ttoqDao = new TtoqDaoImpl();
		$test = $testDao -> get($tno);
		$ttoqs = $ttoqDao -> queryByCondition($tno);
		foreach ($ttoqs as $ttoq) {
			$questions = array_merge($questions, array($questionDao -> get($ttoq['qno'])));
		}
		session_start();
		$_SESSION['test'] = $test;
		$_SESSION['questions'] = $questions;
		header('Location: /teacher/testinfo.php');
	}

	function insert(){
		$tno = $_POST['tno'];
		$subject = $_POST['subject'];
		$tid = $_POST['tid'];
		$quantity = $_POST['quantity'];
		$difficulty = $_POST['difficulty'];
		$total = $_POST['total'];
		$qnos = $_POST['qnos'];
		$qnos = explode('@', $qnos);
		include('../dao/TestDaoImpl.php');
		$testDao = new TestDaoImpl();
		include('../dao/TtoqDaoImpl.php');
		$ttoqDao = new TtoqDaoImpl();
		$result = $testDao -> insert($tno, $subject, $tid, $quantity, $difficulty, $total);
		$tests = $testDao -> queryAll();
		for($i = 0; $i < count($qnos); $i++){
			$result = $ttoqDao -> insert($tno, $i + 1, $qnos[$i]);
		}
		session_start();
		$_SESSION['tests'] = $tests;
		$_SESSION['tno'] = $tno;
		header('Location: /teacher/test.php');
	}
?>