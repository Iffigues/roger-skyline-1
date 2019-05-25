<?php $a=get_cat_product($_GET["article"]); ?>
<div class=char>
<?php foreach($a as $key => $e): ?>
<div class="tank" height="300px" width="300pxi">
<h2>Name: <?php  echo $key; ?></h2>
<img src=<?php echo $e["img"]; ?>></img>
<p>Price: <?php echo $e["price"] ?> </p>
<a href=<?php echo "?page=panel&action=get&name=".$key ?>><button>ACHETER</button></a>
</form>
</div>
<?php endforeach ?>
</div>
