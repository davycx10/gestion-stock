<?php

	try{
		$users = "admin";
		$pass = "myadmin";
		$bdd = new PDO ('mysql:host=localhost;dbname=VTC',$users,$pass);

	}catch (PDOException $e){
		print "Erreur! :" . $e->getMessage() .
		"<br/>";
		die();
	}

?>