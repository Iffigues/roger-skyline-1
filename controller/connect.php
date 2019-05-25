<?php
require_once("template/func/connect.php");
if ($_SERVER['REQUEST_METHOD'] == 'POST')   {
	if ($_GET['action'] == 'login') {
		is_valid($_POST);
	}
	if ($_GET['action'] == 'register') {
		add_user($_POST);
	}
}
require_once('template/connect.php');

