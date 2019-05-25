<?php

function verif_password($password) {
	if (preg_match('#^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).{8,}$#', $password))
		return 1;
	return (0);
}
