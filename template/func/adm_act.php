<?php

function get_admin() {
	$pwd = "./data/admin";
	return (unserialize(file_get_contents($pwd)));
}

function validated_adm($user, $pass) {
	$adm = get_admin();
	$valid_users = array_keys($adm); 
	return (in_array($user, $valid_users) && (hash("sha256", $pass) == $adm[$user]));
}

function add_user_adm($a) {
	
}

function adm($get, $post) {
	if ($get == "user-adm")
		add_user_adm($post);
}
