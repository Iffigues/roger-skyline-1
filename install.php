<?php
	$a = "./data";
	if (!file_exists($a))
		mkdir($a);
	if (!file_exists($a."admin"))
		file_put_contents($a."/admin" , serialize(array("admin" => hash("sha256","admin"))));
	
?>
