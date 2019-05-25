<?php 

function get_log() {
	return (unserialize(file_get_contents("./data/user")));
}

function set_user($a) {
}
