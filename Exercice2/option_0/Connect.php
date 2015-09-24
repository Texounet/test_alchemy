<?php
include 'vars.php';

$connect = new Connect;

	if($_GET['action'] == 0)
		$connect->login($_POST['login'], $users);

	elseif($_GET['action'] == 1)
		$connect->logout();

	header("Location: connection.php");

class Connect
{
	public function login($log, $users)
	{
		foreach ($users as $key_user => $value_user) {
			if($key_user == $log){
				$_SESSION['Profil'] = $value_user;
			}
		}
	}

	public function logout()
	{
		unset($_SESSION['Profil']);
	}
}