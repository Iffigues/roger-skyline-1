<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<link rel="icon" type="image/gif" href="./asset/favicon/FAVICON.gif" />

<title>PP</title>

<link href="https://fonts.googleapis.com/css?family=Charm" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="./asset/css/style.css">

</head>

<body>

<header>
<a href="/"><img src="https://www.pixenli.com/image/K2j_AZkB"></a>
<a href="/"><h1>Pink Paradise</h1></a>
<a href="/"><img src="https://www.pixenli.com/image/HYqDrN52"></a>
</header>

<div class="head">
<a href="?page=panel"><h2>Panier 🛍</h2></a>
<?php  if(!$_SESSION['login']):  ?>
<a href=?page=connect><h2>Se connecter 🦄</h2></a>
<?php  else: ?>
<a href="?page=logoute"><h2>Log Out ✂️</h2></a>
<a href="?page=account"><h2>Account 📝</h2></a>
<?php endif; ?>
<a href="https://www.youtube.com/watch?v=adPdBxINung">Why buy tanks ? 🍑</a>
</div>

<div id="content">
<?= $content ?>
</div>

<footer>©️ Denoyelle Boris - Carpentier Loup</footer>

</body>

</html>
