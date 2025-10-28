<?php 
    include('../../model/produit/produitModel.php');
    include('../../bdd/bdd.php');

if (isset($_POST['action'])){


$produitController =  new ProduitController($bdd);

    switch($_POST['action']){
        case 'ajouter':

         
        $produitController->create();

            break;
        case 'update':
            break;
        case 'supprimer':
            break;
        
        default:
            header('Location:http://localhost/gestion-stock/index.php?page=accueil');
            break;
        
    }

}

class ProduitController 
{
    private $Produit;

    function __construct($bdd)
    {
        $this->produit = new Produit($bdd);
    }

    public function create() {

            /*var_dump($_POST);
            die();*/


        $this->produit->addProduit($_POST['nom'], $_POST['description'], $_POST['quantite'], $_POST['nom_type_produit']);

        header('Location:http://localhost/gestion-stock/index.php?page=accueil');
    }

}



?>
