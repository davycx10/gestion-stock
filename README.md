# gestion-stock
#  Gestion de Stock (Inventaire)

Application web permettant la **gestion des stocks** d'une entreprise.  
Elle permet aux utilisateurs de gérer les produits, leurs types, et d’assurer un suivi clair et organisé de l’inventaire.

---

##  Fonctionnalités principales

###  Utilisateurs
- Inscription / Création de compte  
- Connexion et déconnexion sécurisées  
- Gestion des rôles (ex : administrateur, employé)

###  Produits
- Ajout, modification et suppression d’un produit  
- Liste des produits disponibles  
- Recherche et filtrage des produits  
- Association d’un produit à un **type de produit**

### 🏷️ Types de produits
- Création et gestion des catégories (ex : Informatique, Bureautique, Alimentation, etc.)
- Lien entre les produits et leurs catégories

---

##  Structure des tables

### Table `utilisateurs`
| Champ | Type | Description |
|-------|------|-------------|
| id | int | Identifiant unique |
| nom | varchar | Nom complet de l’utilisateur |
| email | varchar | Email (unique) |
| mot_de_passe | varchar | Mot de passe haché |
| role | varchar | (optionnel) Rôle de l’utilisateur |

### Table `type_produit`
| Champ | Type | Description |
|-------|------|-------------|
| id | int | Identifiant unique |
| nom | varchar | Nom du type de produit (ex : Informatique) |

### Table `produit`
| Champ | Type | Description |
|-------|------|-------------|
| id | int | Identifiant unique |
| nom | varchar | Nom du produit (ex : Souris) |
| description | text | Description du produit |
| quantite | int | Quantité disponible |
| id_type_produit | int | Lien vers la table type_produit |

---
