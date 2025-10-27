<?php 

class User 
{
    function __construct($bdd)
    {
        $this->bdd = $bdd;
    }

    public function allUser()
    {
        //la requête SQL
        $req = $this->bdd->prepare("SELECT * FROM utilisateur");
        //execute notre requete à la BDD
        $req->execute();
        //recupère les informations provenant de la BDD
        return $req->fetchAll();
    }

    public function ajouterUtilisateur($nom, $prenom, $email, $mdp)
    {
                
        $req = $this->bdd->prepare("INSERT INTO utilisateur (nom, prenom, email, mdp) VALUES (:nom, :prenom, :email, :mdp)");
        $req->bindParam(':nom', $nom);
        $req->bindParam(':prenom', $prenom);
        $req->bindParam(':email', $email);
        $req->bindParam(':mdp', $mdp);

        return $req->execute();
    }





    public function checklogin($email, $mdp)
    {
        //la requête SQL
        $req = $this->bdd->prepare("SELECT * FROM utilisateur WHERE email= :email AND mdp= :mdp");
        $req->bindParam(':email', $email);
        $req->bindParam(':mdp', $mdp);
        //execute notre requete à la BDD
        $req->execute();
        //recupère les informations provenant de la BDD
        return $req->fetchAll();
    }





















} 
?>