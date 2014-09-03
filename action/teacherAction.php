<?php
	
	$action = $_POST['action']?$_POST['action']:$_GET['action'];

	switch ($action) {
		case 'login':
			login();
			break;

		case 'logout':
			logout();
			break;
		
		default:
			header('Location: /index.php');
			break;
	}

	function login(){
		
		$tid = $_POST['tid'];
		$password = $_POST['password'];
		$remember = $_POST['remember'];
		include('../dao/TeacherDaoImpl.php');
		$teacherDao = new TeacherDaoImpl();
		$teacher = $teacherDao -> get($tid);
		if ($teacher && $teacher['password'] == $password){
			if ($remember) {
				setcookie("tid", $tid, time() + 60*60*24*7, '/');
			}
			session_start();
			$_SESSION['tid'] = $tid;
			$_SESSION['subject'] = $teacher['subject'];
			header('Location: /teacher/index.php');
		}else{
			header('Location: /index.php?error=teacher');
		}
	}

	function logout(){
		session_start();
		session_destroy();
		header('Location: /index.php');
	}
?>