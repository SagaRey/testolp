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
		
		$mid = $_POST['mid'];
		$password = $_POST['password'];
		$remember = $_POST['remember'];
		include('../dao/ManagerDaoImpl.php');
		$managerDao = new ManagerDaoImpl();
		$manager = $managerDao -> get($mid);
		if ($manager && $manager['password'] == $password){
			if ($remember) {
				setcookie("mid", $mid, time() + 60*60*24*7, '/');
			}
			session_start();
			$_SESSION['mid'] = $mid;
			header('Location: /manager/index.php');
		}else{
			header('Location: /index.php?error=manager');
		}
	}

	function logout(){
		session_start();
		session_destroy();
		header('Location: /index.php');
	}
?>