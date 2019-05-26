<?php  $a = get_mixte();?>
<?php if ($a):?>
<div class="char">
	<?php foreach($a as $k => $v): ?>
		<div class="tank">
			<h1><?php  echo $k; ?></h1>
			<img src=<?php echo $v['img']; ?>></img></br>
			<a href=<?php echo "?page=panel&delp=".$k ?>><button>delete</button><a>
			<form action=<?php echo "?page=panel&change=".$k; ?> method="POST">
				nbr: <?php echo $v['nbr']; ?></br>
				<input type="number" min="1"  name="nbr" value=<?php echo $v['nbr']; ?>/>
				<input type="submit" value="Change"/>
			</form>
			<h4>price: <?php echo (intval($v["price"]) * $v['nbr'])?></h4>
		<div>
	<?php endforeach; ?>
</div>
<div><a href="?page=panel&build=re"><h1>Passer Commande</h1></a></div>
<?php else:?>

<?php endif ?>
