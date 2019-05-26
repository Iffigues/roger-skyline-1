<?php

function get_command() {
	return (unserialize(file_get_contents('data/command')));
}

function set_command($a) {
	file_put_contents("data/command", serialize($a));
}

function add_pannel($e) {
	$cook = get_cookie();
	if (!cook) {
		$cook = [$e => 1];
	} else {
		if (isset($cook[$e]))
			$cook[$e] = $cook[$e] + 1;
		else 
			$cook[$e] = 1;
	}
	set_cookie($cook);
}

function del_cookie($a) {
	$cook = get_cookie();
	if ($cook[$a]) {
		unset($cook[$a]);
		var_dump($cook);
		set_cookie($cook);
	}
}

function panel() {
	if ($_GET['build']) {
		if (!$_SESSION["login"]){
			header("Location: http://gopiko.fr/?page=connect&action=login");
		}	else {
		$cook = get_cookie();
		$com = get_command();
		if ($com) {
			array_push($com, [$_SESSION['login'] => $cook]);
		}else
			$com = [$_SESSION['login'] => $cook];
		set_command($com);
		setcookie("panel",'', time() - 3600);
		//header('Location: htp://gopiko.fr/n');
		}
	}
	if ($_GET['delp']) {
		del_cookie($_GET['delp']);
		header('Location: http://gopiko.fr/?page=panel');
	}
	if ($_GET['action']){
		if ($_GET['action'] == "get") {
			$r = $_GET["name"];
			add_pannel($r);
			header('Location: http://gopiko.fr');
		}
	} else {
	require_once('./template/panel.php');
	}
}

