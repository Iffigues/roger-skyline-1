<?php

require_once("template/func/product.php");

function get_cat($a) {
	$ar = array();
	if ($a["russe"])
		array_push($ar, "russe");
	if ($a["francais"])
		array_push($ar, "francais");
	if ($a["allemand"])
		array_push($ar, "allemand");
	if ($a["anglais"])
		array_push($ar, "anglais");
	if ($a["americain"])
		array_push($ar, "ricain");
	if ($a["other"])
		array_push($ar, "other");
	if (empty($ar))
		array_push($ar, "other");
	return ($ar);
}

function del_prod($a) {
	$r = get_product();
	if ($r[$a]) {
		unset($r[$a]);
		set_product($r);
	}
}

function add_product($a) {
	$name = $a['name'];
	if (!select_product($name)) {
		$pr = get_product();
		$price = $a['price'];
		$numbers = $a['nbr'];
		$img = $a['img'];
		$cat = get_cat($a);
		foreach ($a["new"] as $r)
			array_push($cat,$r);
		$pr[$name] = [
			"cat" => $cat,
			"price" => $price,
			"nbr" => $numbers,
			"img" => $img,
		];
		set_product($pr);
	}
}

function set_article($b, $a) {
	$r = get_product();
	$r[$b]["nbr"] = $a['nbr'];
	set_product($r);
}
