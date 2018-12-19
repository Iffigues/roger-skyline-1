<?php

function login($a,$b)
{
	$dbh = new PDO('mysql:host=localhost;dbname=rose', "margaux", "Petassia01");
	$stmt = $dbh->prepare("SELECT * FROM rose  WHERE login=? LIMIT 1");
	if ($stmt->execute(array($a))) 
  		while ($row = $stmt->fetch()) 
    			if (password_verify($b,$row['pwd']))
			{
				$_SESSION['CO'] = 1;
                		$_SESSION['NAME'] = $row['login'];
				return 1;
			}
	return 0;
}

function addin($a,$b)
{
	$dbh = new PDO('mysql:host=localhost;dbname=rose', "margaux", "Petassia01");
	$stmt = $dbh->prepare("INSERT INTO rose (login, pwd) VALUES (?,?)");
	$stmt->bindParam(1, $aa);
	$stmt->bindParam(2, $bb);
	$aa = $a;
	$bb = password_hash($b, PASSWORD_DEFAULT);
	return $stmt->execute();
}
?>
