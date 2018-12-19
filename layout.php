<?php  session_start() ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="icon" type="image/gif" href="./asset/favicon/FAVICON.gif" />
<title>PP is for Pink Paradise</title>
<link href="https://fonts.googleapis.com/css?family=Charm" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="./asset/css/style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
<header class="navbar navbar-expand-sm bg-light jumbotron jumbotron-fluid justify-content-center">
<h1>PP Is For Pink Paradise</h1>
</header>
<div class="dflex align-self-center flex-column  justify-content-center bd-highlight mb-3">
	<?= $content ?>
</div>
<img src="./asset/img/rose.png" id="rose">
<footer id="foot"
style="position: fixed;left:  0;bottom: 0;background-color:#FF5050;width:100%;color:#1B1B1B;">Denoyelle Boris</footer>
</body>
</html>

