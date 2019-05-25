<?php

function get_admin() {
	$pwd = './admin';
	if ( !file_exists($pwd)) {
		$adm = array(
			"admin" => "admin",
		);
		file_put_contents($pwd, serialize($adm));
		return ($adm);
	}
	return (unserialize(file_get_contents($pwd)));
}

function validated_adm($user, $pass) {
	$adm = get_admin();
	$valid_users = array_keys($adm); 
	return (in_array($user, $valid_users) && ($pass == $adm[$user]));
}

$validated = validated_adm($_SERVER['PHP_AUTH_USER'], $_SERVER['PHP_AUTH_PW']);
if (!isset($_SERVER['PHP_AUTH_USER'])){
    header('WWW-Authenticate: Basic realm="My Realm"');
    header('HTTP/1.0 401 Unauthorized');
    echo 'Texte utilisé si le visiteur utilise le bouton d\'annulation';
    exit;
} else {
    if (!$validated) {
        header('HTTP/1.0 401 Unauthorized"');
        header('X-Powered-By: PHP/5.4.26');
        header('WWW-Authenticate: Basic realm="Espaces menbres"');
        header('Content-Type: text/html');
        echo "<html><body>Cette zone est accessible uniquement aux membres du site</body></html>";
    }
    else   {
      	require_once("template/admin.php"); 
    }
}
