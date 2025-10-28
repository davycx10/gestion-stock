<?php 
include ('bdd/bdd.php');
include ('model/user/userModel.php');


$user = new User($bdd);

$allUser = $user->allUser();

?>