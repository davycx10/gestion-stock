<div class="container mt-5">
  <h1 class="mb-4 text-center">Ajouter un produit</h1>

  <form action="controller/produit/produitController.php" method="POST">
    
    <div class="mb-3">
      <label for="nom" class="form-label">Nom</label>
      <input type="text" class="form-control" id="nom" name="nom" placeholder="Nom du produit" required>
    </div>

    <div class="mb-3">
      <label for="descrip" class="form-label">Description</label>
      <input type="text" class="form-control" id="descrip" name="descrip" placeholder="Description du produit">
    </div>

    <div class="mb-3">
      <label for="quantite" class="form-label">Quantité</label>
      <input type="number" class="form-control" id="quantite" name="quantite" placeholder="Quantité" value="0">
    </div>

    <div class="mb-3">
      <label for="nom_type_produit" class="form-label">Type de produit</label>
      <select class="form-control" id="nom_type_produit" name="nom_type_produit" required>
        <option value="">-- Sélectionnez un type --</option>
        <!-- Les options seront insérées par le backend -->
      </select>
    </div>

    <input type="hidden" name="action" value="ajouter">
    <button type="submit" name="valider" class="btn btn-primary">Valider</button>
  </form>
</div>
