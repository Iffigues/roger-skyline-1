<?php if ($_SESSION['login']): ?>
<a href="?page=account&del=1"><h1>Supprimer mon Compte</h1></a>
<h1>Change Password</h1>
<form action="?page=account&change=1" method="POST">
<label>ancien password</label>
<input type="password" name="oldpw">
<label>nouveau password</label>
<input	type="password" name="newpw">
<input type="submit" value="OK"/>
</form>
<?php endif;?>
