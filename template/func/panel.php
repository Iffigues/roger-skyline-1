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
	if ($cook[$a] !== null) {
		unset($cook[$a]);
		set_cookie($cook);
	}
}

function ft_modify($a,$c) {
	$cook = get_cookie();
	$cook[$c] = intval($a['nbr']);
	set_cookie($cook);
}

function panel() {
	if ($_GET['build']) {
		if (!$_SESSION["login"]){
			header("Location: http://gopiko.fr/?page=connect&action=login");
		}	else {
		$cook = get_cookie();
		$com = get_command();
		if (!$com)
		$com = array();
		array_push($com, [$_SESSION['login'] => $cook]);
		set_command($com);
		setcookie("panel",'', time() - 3600);
		require_once('./template/home.php');
		return ;
		}
	}
	if ($_GET['change']) {
		ft_modify($_POST, $_GET['change']);
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

