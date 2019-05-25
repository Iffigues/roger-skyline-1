<?php

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

function panel() {

	if (isset($_GET['action'])) {
		if ($_GET['action'] == "get") {
			$r = $_GET["name"];
			add_pannel($r);
			header('Location: http://gopiko.fr');
		}
	} else {
	require_once('./template/panel.php');
}

}

