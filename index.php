<?php 
//ajout de l'header partt
include ('view/commun/header.php');

$page = isset($_GET['page']) ? $_GET ['page'] : 'accueil';

//debut du body
switch ($page) {
    case 'accueil':
        include ('view/accueil.php');
        break;



    default:
        include ('view/accueil.php');
        break;
}


//fin du body


//ajout du footer partt
include ('view/commun/footer.php');

?>