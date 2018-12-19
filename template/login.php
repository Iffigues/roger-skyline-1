<?php  if ($_SERVER['REQUEST_METHOD'] == 'POST' && !$_SESSION['CO']): ?> 
<?php require_once("./template/func/register.php"); ?>
<?php if ( !login($_POST['login'],$_POST['pwd']) ):  ?>
<?php else: ?>
<?php endif ?>
<?php endif ?>
<?php require_once("home.php");?>
