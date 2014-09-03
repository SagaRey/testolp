<?php
	
	$action = $_POST['action']?$_POST['action']:$_GET['action'];

	switch ($action) {
		case 'login':
			login();
			break;

		case 'logout':
			logout();
			break;

		case 'practice':
			practice();
			break;

		case 'test':
			test();
			break;

		case 'start':
			start();
			break;
		
		default:
			header('Location: /index.php');
			break;
	}

	function login(){
		
		$sid = $_POST['sid'];
		$password = $_POST['password'];
		$remember = $_POST['remember'];
		include('../dao/StudentDaoImpl.php');
		$studentDao = new StudentDaoImpl();
		$student = $studentDao -> get($sid);
		if ($student && $student['password'] == $password){
			if ($remember) {
				setcookie("sid", $sid, time() + 60*60*24*7, '/');
			}
			session_start();
			$_SESSION['sid'] = $sid;
			header('Location: /student/index.php');
		}else{
			header('Location: /index.php?error=student');
		}
	}

	function logout(){
		session_start();
		session_destroy();
		header('Location: /index.php');
	}

	function practice(){
		include('../dao/TestDaoImpl.php');
		$testDao = new testDaoImpl();
		$tests = $testDao -> queryAll();
		session_start();
		$_SESSION['tests'] = $tests;
		header('Location: /student/test.php');
	}

	function test(){
		include('../dao/TestDaoImpl.php');
		$testDao = new testDaoImpl();
		$tests = $testDao -> queryAll();
		session_start();
		$_SESSION['tests'] = $tests;
		header('Location: /student/test.php');
	}

	function start(){
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
		header('Location: /student/testinfo.php');
	}
?>