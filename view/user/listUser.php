<?php
include ('controller/user/selectUser.php');

?>

<!-- <a href="index.php?page=ajouterUtilisateur" class="btn ajouter-btn">Inscription</a> -->

<div class="container my-5">
    <h2 class="mb-4 text-center">Tous les utilisateurs</h2>

    <!-- Bloc info -->
    <div class="mb-4 text-center">
        <p>Vous n'avez pas de compte ? <a href="index.php?page=addUser" class="btn btn-success ms-2">Inscrivez-vous</a></p>
        <p>Vous avez déjà un compte mais vous n'êtes pas connecté ? <a href="index.php?page=LogInUser" class="btn btn-primary ms-2">Connectez-vous</a></p>
    </div>

    
    <div class="table-responsive">
        <table class="table table-striped table-hover align-middle">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($allUser as $value) { ?>
                    <tr>
                        <td><?php echo $value['ID']; ?></td>
                        <td><?php echo $value['nom']; ?></td>
                        <td><?php echo $value['prenom']; ?></td>
                        <td><?php echo $value['email']; ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>

