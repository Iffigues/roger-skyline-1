<?php require_once('template/func/panel.php');?>
<?php if (isset($_SERVER['PHP_AUTH_USER'])): ?>
<div id="admin-panel">
<a href="#add-cat"><h2>Add Categorie</h2></a>
<a href="#add-user"><h2>Create User</h2></a>
<a href="#add-product"><h2>Add Article</h2></a>
<a href="#stock-opt"><h2>Product Gestion</h2></a>
<a href="#comme"><h2>Commande</h2></a>
</div>
<div id="#add-cat">
<h1>Add Categorie</h1>
<form method="POST" action="/?page=admin&cat=add">
	<input type="text" name="categorie" placeholder="categorie"/>
	<input type="text" name="titre" placeholder="titre"/>
	<input type="text" name="image" placeholder="image"/>
	<input  type="submit" value="ok"/>
</form>
<?php $a = get_cate();?>
<?php foreach ($a as $key => $value): ?>
<h4><?php echo $key ?><h4><a href=<?php echo "?page=admin&cat=del&produit=".$key?>><button><h6>Del</h6></button></a>
<?php endforeach; ?>
</div>
<div id="#add-user">
<h2>Add user</h2>
<form method="POST" action="?page=admin&action=user-adm">
<input type="text" name="login" placeholder="login"/>
<input type="password" name="password"/>
<input type="submit" name="OK" value="OK" />
</form>
</div>
<div id="add-product">
<h2>Add Product</h2>
<form method="POST" action="?page=admin&action=add-product">
<input type="checkbox" id="scales" name="russe" checked>russe
<input type="checkbox" id="scales" name="francais">francais
<input type="checkbox" id="horns" name="allemand">allemand
<input type="checkbox" id="horns" name="anglais">anglais
<input type="checkbox" id="horns" name="ricains">ricains
<input type="checkbox" id="horns" name="other">other
<?php foreach($a as $k => $v): ?>
<input type="checkbox" name="new[]" value=<?php  echo $k; ?> /><?php echo $k; ?>
<?php endforeach;?>
<input type="number" name="price" min="10000" value="10000"/>prix
<input type="number" name="nbr" min="1" value="1"/>nombre
<input  type="text" name="name" placeholder="name"  />nom
<input type="text"  name="img" placeholder="src"/>image
<input type="submit"  name="OK" value="OK"/>
</form>
</div>
<div id="stock-opt">
<h2>Product Gestion</h2>
<?php $a=get_product();?>
<?php foreach($a as $name => $p):?>
	<div>
	<h3><?php echo $name ?></h3>
	<form method="POST" action=<?php echo "?page=admin&action=set_product&product=".$name; ?> >
		<input name="nbr" type="number" min="0" value=<?php $r = $p["nbr"]; echo "$r"; ?>>
		<input type="submit"  value="change"/>
	</form>
	<a href=<?php echo "?page=admin&action=del_prod&product=".$name ?>><button>del</button></a>
	</div>
<?php endforeach ?>
<?php $com = get_command()?>
<div id="comme">
<h1>Commande</h1>
<?php foreach($com as $e => $tr):?>
<div>
<?php foreach($tr as $key => $val): ?>
	<?php if ($val):?>
	<h1><?php echo $key; ?></h1>
	<?php foreach($val as $cle => $valeur): ?>
		<h4><?php echo $cle." ".$valeur;?></h4>
	<?php endforeach ?>
	<?php endif;?>
<?php endforeach ?>
</div>
<?php endforeach;?>
</div>
</div>
<?php else: ?>
<p>No No No Stop it Now Please</p>
<?php  endif ?>
