<?php
require_once("template/func/connect.php");

function ff($a, $b) {
	$user = get_user();
	$login = $_SESSION['login'];
	if ($a['del']) {
		if ($user[$login]){
			unset($user[$login]);
			set_user($user);
			session_destroy();
			header("Location: http://gopiko.fr");
		}
	}
	if ($a['change']) {
		if ($user[$login]) {
			$pass = hash("whirlpool", $b['oldpw']);
			if ($pass == $user[$login]) {
				$user[$login] = hash("whirlpool", $b['newpw']);
				set_user($user);
			}
		}
	}
}
