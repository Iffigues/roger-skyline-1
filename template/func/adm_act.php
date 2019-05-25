<?php

require_once("template/func/password_check.php");
require_once("template/func/add_product.php");

function get_admin() {
	$pwd = "./data/admin";
	return (unserialize(file_get_contents($pwd)));
}

function set_admin($a) {
	file_put_contents("./data/admin", serialize($a));
}

function validated_adm($user, $pass) {
	$adm = get_admin();
	$valid_users = array_keys($adm); 
	return (in_array($user, $valid_users) && (hash("sha256", $pass) == $adm[$user]));
}

function add_user_adm($a) {
	$adm = get_admin();
	$valid = array_keys($adm);
	if (!in_array($a["login"], $valid) && verif_password($a["password"])) {
		$adm[$a["login"]] = hash("sha256", $a["password"]);
		set_admin($adm);
	}
}

function adm($get, $post) {
	if (isset($get) && $get == "user-adm")
		add_user_adm($post);
	if (isset($get) && $get == "add-product")
		add_product($post);
	if (isset($get) && $get == "set_product")
		set_article($_GET["product"],$post);
	if(isset($get) && $get == "del_prod")
		del_prod($_GET["product"]);
}
