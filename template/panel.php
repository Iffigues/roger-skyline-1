<?php  $a = get_mixte();?>
<?php if ($a):?>
<div class="char">
	<?php foreach($a as $k => $v): ?>
		<div class="tank">
			<h1><?php  echo $k; ?></h1>
			<img src=<?php echo $v['img']; ?>></img></br>
			<a href=<?php echo "?page=panel&delp=".$k ?>><button>delete</button><a>
		<div>
	<?php endforeach; ?>
</div>
<div><a href="?page=panel&build=re"><h1>Passer Commande</h1></a></div>
<?php else:?>

<?php endif ?>
