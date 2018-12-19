<?php if ($_SESSION['CO']):  ?>
<a href="./?page=logout"><button class="btn btn-danger">LogOut</button></a>
<?php else: ?>
 <h3><p class="p-2  bd-highlight">Login</p></h3>
  <div class="p-2  bd-highlight">
<form class="form-inline" action="/?page=login" method="POST">
	<label for="Login">Login</label>
  <input type="Login" class="form-control" id="logine" name="login">
  <label for="pwd">Password:</label>
  <input type="password" class="form-control" id="pwd" name="pwd">
  <button type="submit" class="btn btn-danger">Submit</button>
                </form></div>
        <h3><p class="p-2  bd-highlight">Register</p></h3>
         <div class="p-2  bd-highlight ">
<form class="form-inline" action="/?page=register" method="POST">
   <label for="Login">Login</label>
  <input type="Login" class="form-control" id="login" name="login">
  <label for="pwd">Password:</label>
  <input type="password" class="form-control" id="pwd" name="pwd">
<label for="pwd2">Password Verification:</label>
  <input type="password" class="form-control" id="pwd2" name="pwd2">
  <button type="submit" class="btn btn-danger">Submit</button>
                </form></div>
<?php endif ?>
<?php if ($_SESSION['ERROR']): ?>
<?php  echo $_SESSION['ERR'] = "SOMETHING WAS BAD";?>
<?php endif?>
<?php if ($_SESSION['SUCCESS']): ?>
<?php  echo $_SESSION['SUCC'] = "Congratulation your registered";?>
<?php endif?>
