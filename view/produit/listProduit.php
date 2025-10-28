<?php
// Inclure le fichier qui récupère tous les produits
include('controller/produit/selectProduit.php');
?>

<a href="index.php?page=addProduit" class="btn btn-primary ms-2">Ajouter produit</a>

<div class="container my-5">
    <h2 class="mb-4 text-center">Tous les produits</h2>

    <table class="table table-striped table-bordered mt-5">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Description</th>
                <th>Quantité</th>
                <th>Type de produit</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($allProduit)) : ?>
                <?php foreach ($allProduit as $produit) : ?>
                    <tr>
                        <td><?php echo htmlspecialchars($produit['id']); ?></td>
                        <td><?php echo htmlspecialchars($produit['nom']); ?></td>
                        <td><?php echo htmlspecialchars($produit['descrip']); ?></td>
                        <td><?php echo htmlspecialchars($produit['quantite']); ?></td>
                        <td><?php echo htmlspecialchars($produit['nom_type_produit']); ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php else : ?>
                <tr>
                    <td colspan="5" class="text-center">Aucun produit trouvé</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>
