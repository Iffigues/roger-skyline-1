<?php  if ($_SERVER['REQUEST_METHOD'] == 'POST' ): ?>
<?php  require_once("./template/func/register.php");?>
	<?php if ( !addin($_POST['login'],$_POST['pwd']) ): ?>
	<?php  $_SESSION['ERROR'] = 1;?>
        <?php $_SESSION['ERR'] = "SOMETHING WAS BAD";?>
	<?php else: ?>
	<?php  $_SESSION['SUCCESS'] = 1;?>
        <?php $_SESSION['SUCC'] = "SOMETHING WAS GOOD";?>
	<?php endif ?>
<?php endif ?>
<?php require_once("home.php");?>
