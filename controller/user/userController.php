<?php 
    include('../../model/user/userModel.php');
    include('../../bdd/bdd.php');

if (isset($_POST['action'])){

/*var_dump($_POST);
die();*/

$userController =  new UserController($bdd);

    switch($_POST['action']){
        case 'ajouter':
        /*var_dump($_POST);
        die();*/
        $userController->create();
            break;

        case 'update':
            break;
        case 'supprimer':
            break;
        case 'connexion':
            $userController->checklogin();
            break;
        
        default:
            header('Location:http://localhost/chauffeurs/index.php?page=accueil');
            break;
        
    }
}
class UserController 
{
    private $user;

    function __construct($bdd)
    {
        $this->user = new User($bdd);
    }

    public function create() {

            /*var_dump($_POST);
            die();*/

        $this->user-> addUser($_POST['nom'], $_POST['prenom'], $_POST['email'],$_POST['mdp']);
        header('Location:http://localhost/gestion-stock/index.php?page=accueil');
    }

    public function checklogin(){
        $login = $this->user->checklogin($_POST['email'], $_POST['mdp']);
        if (!$login){

        header('Location:http://localhost/gestion-stock/index.php?page=accueil');

        }

    }

}

