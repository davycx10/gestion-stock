<?php 

class Produit
{
    function __construct($bdd)
    {
        $this->bdd = $bdd;
    }

    //CRUD

    //READ
    public function allProduit()
    {
        //la requête SQL
        $req = $this->bdd->prepare("SELECT * FROM produit");
        //execute notre requete à la BDD
        $req->execute();
        //recupère les informations provenant de la BDD
        return $req->fetchALL();
    }

    public function ProduitById()
    {
        //la requête SQL
        $req = $this->bdd->prepare("SELECT * FROM produit");
        //execute notre requete à la BDD
        $req->execute();
        //recupère les informations provenant de la BDD
        return $req->fetchALL();
    }

    public function addProduit($Nom, $Description, $Quantite, $Nom_type_produit)
    {

        $Disponibilite = 1;
                
        $req = $this->bdd->prepare("INSERT INTO produit (nom, descrip, quantite, nom_type_produit) VALUES (:nom, :descrip, :quantite, :nom_type_produit)");
        
        $req->bindParam(':nom', $Nom);
        $req->bindParam(':descrip', $Description);
        $req->bindParam(':quantite', $Quantite);
        $req->bindParam(':nom_type_produit', $Nom_type_produit);

        return $req->execute();
    }
}
?>
