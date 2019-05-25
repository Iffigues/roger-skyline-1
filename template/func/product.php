<?php

function get_product() {
	$pr = "./data/product";
	return (unserialize(file_get_contents($pr)));
}

function set_product($a) {
	file_put_contents("./data/product", serialize($a));
}

function select_product($a) {
	$adm = get_product();
	$val = array_keys($adm);
	return (in_array($a, $val));
}

function get_cat_product($a) {
	$ar = array();
	$pr = get_product();
	foreach ($pr as $key => $val)
		foreach ($val["cat"] as $o)
			if ($o == $a)
				$ar[$key] = $val;
	return ($ar);
}
