<?php
require_once("template/func/adm_act.php");
require_once("template/func/categorie.php");
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
    } else {
	    	if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_GET['action'])
			adm($_GET['action'], $_POST);
		else if ($_GET['action'])
			adm($_GET['action'],$_POST);
		else if ($_GET['cat'])
			cate($_GET['cat'], $_GET['produit']);
      		require_once("template/admin.php"); 
    }
}
