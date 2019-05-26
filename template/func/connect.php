<?php

function get_user() {
	return (unserialize(file_get_contents("data/user")));
}

function set_user($a) {
	file_put_contents("data/user", serialize($a));
}

function add_user($a) {
	$r = get_user();
	if (!$r[$a['login']]) {
		$r[$a['login']] = hash("whirlpool",$a['passwd']);
		set_user($r);
	}
}

function is_valid($a) {
	$r = get_user();
	if ($r[$a['login']])
		if (hash("whirlpool", $a['passwd']) ==  $r[$a['login']]) {
			$_SESSION['login'] = $a['login'];
		}
}
