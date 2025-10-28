-- Création de la base de données
CREATE DATABASE IF NOT EXISTS Inventory_management;
USE Inventory_management;

-- ============================================
-- TABLE : utilisateurs
-- ============================================
CREATE TABLE utilisateur (
    ID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR (50) NOT NULL,
    prenom VARCHAR (50) NOT NULL,
    email VARCHAR (100) NOT NULL UNIQUE,
    mdp VARCHAR (100) NOT NULL
);

-- ============================================
-- TABLE : type_produit
-- ============================================

CREATE TABLE type_produit (
    nom VARCHAR(100) PRIMARY KEY
);

-- ============================================
-- TABLE : produit
-- ============================================
CREATE TABLE produit (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(100) NOT NULL,
    description TEXT,
    quantite INT DEFAULT 0,
    nom_type_produit VARCHAR(100),
    FOREIGN KEY (nom_type_produit) REFERENCES type_produit(nom)
);
-- ============================================
-- INSERTIONS DE DÉMONSTRATION
-- ============================================

-- Exemple de type de produit
-- INSERT INTO type_produit (nom) VALUES 
-- ('Informatique'),
-- ('Électroménager'),
-- ('Mobilier');

-- Exemple de produit
-- INSERT INTO produit (nom, description, quantite, id_type_produit)
-- VALUES
-- ('Souris', 'Souris optique sans fil', 50, 1),
-- ('Clavier', 'Clavier mécanique RGB', 20, 1);

-- Exemple d’utilisateur avec mot de passe haché en SHA1
-- Exemple : mot de passe = "monsecret"
-- INSERT INTO utilisateurs (nom, prenom, email, mdp)
-- VALUES ('Jean Dupont', 'jean.dupont@example.com', SHA1('monsecret'));
