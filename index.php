<?php 
//ajout de l'header partt
include ('view/commun/header.php');

$page = isset($_GET['page']) ? $_GET ['page'] : 'accueil';

//debut du body
switch ($page) {
    case 'accueil':
        include ('view/accueil.php');
        break;

    case 'listProduit':
        include ('view/produit/listProduit.php');
        break;

    case 'listTypeProduit':
        include ('view/type_produit/listTypeProduit.php');
        break;

    case 'listUser':
        include ('view/user/listUser.php');
        break;



    default:
        include ('view/accueil.php');
        break;
}


//fin du body


//ajout du footer partt
include ('view/commun/footer.php');

?>