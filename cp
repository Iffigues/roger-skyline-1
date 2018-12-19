<?php  session_start() ?>

<?php 
	function form()
	{
	 echo "<p class=\"p-2  bd-highlight\">Login</p>";
		echo '<div class=\"p-2  bd-highlight\"><form class=\"form-inline\" action="./?page=\"login\"">
			<label for=\"Login\">Login</label>
  <input type="Login" class=\"form-control\" id=\"login\">
  <label for=\"pwd\">Password:</label>
  <input type=\"password\" class=\"form-control\" id=\"pwd\">
  <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
		</form></div>';
	echo "<p class=\"p-2  bd-highlight\">Register</p>";
	echo '<div class=\"p-2  bd-highlight \"><form class=\"form-inline\" action="./?page=\"register\"">
                        <label for=\"Login\">Login</label>
  <input type="Login" class=\"form-control\" id=\"login\">
  <label for=\"pwd\">Password:</label>
  <input type=\"password\" class=\"form-control\" id=\"pwd\">
<label for=\"pwd\">Password Verification:</label>
  <input type=\"password\" class=\"form-control\" id=\"pwd2\">
  <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
                </form></div>';
	}
 ?>
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
PP Is For Pink Paradise
</header>
<div class="dflex align-self-center flex-column  justify-content-center bd-highlight mb-3">
<?php if ($_SERVER['REQUEST_METHOD'] === 'GET'):?>
	<?php if (isset($_SESSION['CO'])):  ?>
		<?php if (isset($_GET['page']) && $_GET['page'] == "logout"):  ?>
	  		<?php session_destroy() ?>
		<?php else: ?>
		 	<a href="./?page=logout"><button>Log Out</button></a>
		<?php endif; ?>
	<?php endif; ?>
	<?php if (!isset($_SESSION['CO'])): ?>
		<?php form()?>
	<?php endif; ?>
<?php endif; ?>
</div>
</body>
</html>

