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
		file_put_contents($a."/categorie",serialize([
			"francais" => ["https://upload.wikimedia.org/wikipedia/commons/f/f7/Leclerc-IMG_1744-b.jpg","Char francais"],
			"allemand" => ["https://upload.wikimedia.org/wikipedia/commons/a/ac/PzIV.Saumur.000a5s6s.jpg", "Char allemand"],
			"russe" => ["https://upload.wikimedia.org/wikipedia/commons/4/42/Char_T-34.jpg", "Char russe"],
			"britannique" => ["https://upload.wikimedia.org/wikipedia/commons/e/eb/Cromwell-latrun-2.jpg","Char Britannique"], 
			"americain" => ["https://i.skyrock.net/5098/62295098/pics/2519800787_1.jpg", "Americain"],
			"chinois" => ["https://upload.wikimedia.org/wikipedia/commons/thumb/4/4c/Type_99_MBT_front_left.jpg/1280px-Type_99_MBT_front_left.jpg","Chinois"],
			"other" => ["https://upload.wikimedia.org/wikipedia/commons/7/70/DaVinciTankAtAmboise.jpeg","Serie Limite"]
			]));
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
