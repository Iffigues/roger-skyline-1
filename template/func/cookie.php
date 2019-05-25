<?php

require_once('./template/func/product.php');

function get_cookie() {
	if (isset($_COOKIE["panel"]))
		$b = (unserialize($_COOKIE["panel"]));
	return ($b);
}

function set_cookie($a) {
	setcookie("panel", serialize($a), time()+3600);
}

function get_mixte() {
	$ar = array();
	$cook = get_cookie();
	$pro = get_product();
	foreach ($cook as $key => $val)
		if ($pro[$key]) {
			$pro[$key]['nbr'] = $val; 
			$ar[$key] = $pro[$key];
		}
	return ($ar);
}
