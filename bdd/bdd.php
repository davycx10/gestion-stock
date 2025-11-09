<?php

	try{
		$users = "admin";
		$pass = "myadmin";
		$bdd = new PDO ('mysql:host=localhost;dbname=Inventory_management',$users,$pass);

	}catch (PDOException $e){
		print "Erreur! :" . $e->getMessage() .
		"<br/>";
		die();
	}

?>