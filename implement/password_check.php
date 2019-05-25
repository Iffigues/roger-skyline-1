<?php

$password = $_POST['password'];

if (preg_match('#^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).{8,}$#', $password)) {
	echo 'Mot de passe conforme';
}

else {
	echo 'Mot de passe non conforme';
}	
?>
