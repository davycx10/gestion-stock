<div class="container mt-5">
  <h1 class="mb-4">Connexion</h1>
  <form action="controller/user/userController.php" method="POST">

    <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
    </div>

    <div class="mb-3">
      <label for="password" class="form-label">Mot de passe</label>
      <input type="password" class="form-control" id="password" name="mdp" placeholder="Mot de passe" required>
    </div>

    <input type="hidden" name="action" value="connexion">
    <button type="submit" name="valider" class="btn btn-primary">Valider</button>
  </form>
</div>
