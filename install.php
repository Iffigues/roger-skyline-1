<?php
	$a = "./data";
	if (!file_exists($a))
		mkdir($a, "0777");
	if (!file_exists($a."admin")) {
		file_put_contents($a."/admin" , serialize(array("admin" => hash("sha256","admin"))));
		chmod($a."/admin", 0777);
	}
	if (!file_exists($a."/product")) {
		file_put_contents($a."/product", '');
		chmod($a."/product",0777);
	}
	if (!file_exists($a."categorie"))  {
		file_put_contents($a."/categorie",'');
		chmod($a."/categorie", 0777);
	}
	if (!file_exists($a."/user")) {
		file_put_contents($a."/user",'');
		chmod($a."/user",0777);
	}
	if (!file_exists($a."/command")) {
		file_put_contents($a."/command",'');
		chmod($a."/command", 0777);
	}
?>
