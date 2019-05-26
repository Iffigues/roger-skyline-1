<?php require_once("template/func/categorie.php"); ?>
<?php $a = get_cate(); ?>
<div class="char">
<div class="tank">
<h1>Char Français 🇫🇷</h1>
<a href="?page=article&article=francais"><img src="https://upload.wikimedia.org/wikipedia/commons/f/f7/Leclerc-IMG_1744-b.jpg"></a>
</div>
<div class="tank">
<h1>Char Allemand 🇩🇪</h1>
<a href="?page=article&article=allemand"><img src="https://upload.wikimedia.org/wikipedia/commons/a/ac/PzIV.Saumur.000a5s6s.jpg"></a>
</div>
<div class="tank">
<h1>Char Russe 🇷🇺</h1>
<a href="?page=article&article=russe"><img src="https://upload.wikimedia.org/wikipedia/commons/4/42/Char_T-34.jpg"></a>
</div>
<div class="tank">
<h1>Char Britannique 🇬🇧</h1>
<a href="?page=article&article=anglais"><img src="https://upload.wikimedia.org/wikipedia/commons/e/eb/Cromwell-latrun-2.jpg"></a>
</div>
<div class="tank">
<h1>Char Américain 🇺🇸</h1>
<a href="?page=article&article=americain"><img src="https://i.skyrock.net/5098/62295098/pics/2519800787_1.jpg"></a>
</div>
<div class="tank">
<h1>Char Chinois 🇨🇳</h1>
<a href="?page=article&article=chinois"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/4c/Type_99_MBT_front_left.jpg/1280px-Type_99_MBT_front_left.jpg"></a>
</div>
<div class="tank">
<h1>⭐️ Série Limitée ⭐️</h1>
<a href="?page=article&article=other"><img src="https://upload.wikimedia.org/wikipedia/commons/7/70/DaVinciTankAtAmboise.jpeg"></a>
</div>
<?php foreach($a as $key => $val): ?>
<div class="tank">
<h1><?php echo $val[1] ?></h1>
<a href=<?php echo "?page=article&article=".$key; ?>><img   src=<?php echo $val[0]; ?>></a>
</div>
<?php endforeach; ?>
</div>

