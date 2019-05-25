<?php
function get_cate() {
	return unserialize(file_get_contents("./data/categorie"));
}

function set_cate($e) {
	file_put_contents("data/categorie", serialize($e));
}

function cate($a, $b) {
	$r = get_cate();
	if ($a == "add")
		if (!$r[$_POST['categorie']]) {
			$r[$_POST['categorie']] = [$_POST['image'],$_POST['titre']];
			set_cate($r);
			}
	if ($a == "del" && $b) {
		if ($r[$b]) {
			unset($r[$b]);
			set_cate($r);
			}
	}
}
