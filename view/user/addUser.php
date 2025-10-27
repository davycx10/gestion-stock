<div class="container mt-5">
  <h1 class="mb-4">Inscription</h1>
  <form action="controller/user/userController.php" method="POST">
    <div class="row mb-3">
      <div class="col-md-6">
        <label for="nom" class="form-label">Nom</label>
        <input type="text" class="form-control" id="nom" name="nom" placeholder="Nom" required>
      </div>
      <div class="col-md-6">
        <label for="prenom" class="form-label">Prénom</label>
        <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Prénom" required>
      </div>
    </div>

    <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
    </div>

    <div class="mb-3">
      <label for="password" class="form-label">Mot de passe</label>
      <input type="password" class="form-control" id="password" name="mdp" placeholder="Mot de passe" required>
    </div>

    <input type="hidden" name="action" value="ajouter">
    <button type="submit" name="valider" class="btn btn-primary">Valider</button>
  </form>
</div>
