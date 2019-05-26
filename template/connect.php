<?php if (!$_SESSION['login']): ?>
<div>
<h1>login</h1>
<form action="?page=connect&action=login" method="POST">
	<input type="text" placeholder="login" name="login"/>
	<input type="password" name="passwd"/>
	<input type="submit" value="Ok"/>
</form>
</div>
<div>
	<h1>register</h1>
	<form action="?page=connect&action=register" method="POST">
		<input type="text" placeholder="login" name="login"/>
		<input type="password" placeholder="passwd" name="passwd">
		<input type="submit" value="OK"/>
	</form>
</div>
<?php else: ?>
<?php header("Location: http://gopiko.fr/")?>
<?php endif ?>
