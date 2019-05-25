<?php session_start();?>
<?php ob_start();?>
<?php  $_SESSION['ERROR'] = 0;?>
<?php $_SESSION['SUCCESS'] = 0;?>
<?php if (isset($_GET['page']) && file_exists("./template/".$_GET['page'].".php")): ?>
	<?php require_once("./controller/".$_GET['page'].".php")?>
<?php else:?>
	<?php require_once('./template/home.php')?>
<?php endif ?>
<?php $content = ob_get_clean();?>
<?php require_once('layout.php');?>
<?php  $_SESSION['ERROR'] = 0;?>
<?php $_SESSION['SUCCESS'] = 0;?>
