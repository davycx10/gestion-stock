<?php
// register.php
$pdo = new PDO("mysql:host=localhost;dbname=magasin;charset=utf8mb4", "root", "");

// Récupère les données (ex: depuis un formulaire)
$nom = $_POST['nom'] ?? '';
$email = $_POST['email'] ?? '';
$mdp = $_POST['mot_de_passe'] ?? '';

// validation simple
if (!filter_var($email, FILTER_VALIDATE_EMAIL) || strlen($mdp) < 6) {
    exit("Email invalide ou mot de passe trop court.");
}

// HACHAGE SHA1 (ici on hache EN PHP)
$mdp_hache = sha1($mdp);

// Insère dans la base
$stmt = $pdo->prepare("INSERT INTO utilisateurs (nom, email, mot_de_passe) VALUES (?, ?, ?)");
try {
    $stmt->execute([$nom, $email, $mdp_hache]);
    echo "Inscription OK";
} catch (PDOException $e) {
    echo "Erreur: " . $e->getMessage();
}
