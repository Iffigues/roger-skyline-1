<?php if (isset($_SERVER['PHP_AUTH_USER'])): ?>
<div id="admin-panel">
<a href="#add-user"><h2>Create User</h2></a>
<a href="#produit"><h2>Produit Panel</h2></a>
</div>
<div id="#add-user">
	<form method="POST" action="?page=admin&action=user-adm">
		<input type="text" name="login" placeholder="login"/>
		<input type="password" name="password"/>
		<input type="submit" name="OK" value="OK" />
	</form>
</div>
<div id="#produit">
</div>
<?php else: ?>
<p>No No No Stop it Now Please</p>
<?php  endif ?>
