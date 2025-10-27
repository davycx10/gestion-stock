<?php
// login.php
$pdo = new PDO("mysql:host=localhost;dbname=magasin;charset=utf8mb4", "root", "");

$email = $_POST['email'] ?? '';
$mdp = $_POST['mot_de_passe'] ?? '';

if (!filter_var($email, FILTER_VALIDATE_EMAIL) || $mdp === '') {
    exit("Valeurs manquantes.");
}

// Récupère l'utilisateur
$stmt = $pdo->prepare("SELECT id, nom, mot_de_passe FROM utilisateurs WHERE email = ? LIMIT 1");
$stmt->execute([$email]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$user) {
    exit("Email ou mot de passe incorrect.");
}

// Compare de façon sûre
$hash_en_base = $user['mot_de_passe'];
$hash_tentative = sha1($mdp);

if (hash_equals($hash_en_base, $hash_tentative)) {
    // succès
    session_start();
    $_SESSION['user_id'] = $user['id'];
    echo "Connexion réussie. Bienvenue " . htmlspecialchars($user['nom']);
} else {
    exit("Email ou mot de passe incorrect.");
}
