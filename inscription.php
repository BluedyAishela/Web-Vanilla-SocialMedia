<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Page d'accueil</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/form.css">
</head>
<body>
<?php include('public/navbar.php') ?>
<!-- Le reste du contenu -->
<section class="section-accueil">
    <!--  Gestion des différentes erreurs  -->
    <?php
    function gestionErreur() {
        echo '<div class="alert alert-danger">
                <strong>Erreur</strong> Valeur incorrecte
              </div>';

    }
    ?>
    <!--  Formulaire  -->
    <form action="src/inscription_traitement.php" method="post">
        <!-- Vos champs de formulaire ici -->
        <label for="pseudo">Pseudo</label>
        <input type="text" id="pseudo" name="user_pseudo" required>

        <label for="email">Email</label>
        <input type="email" id="email" name="user_email" required>

        <label for="password">Password</label>
        <input type="password" id="password" name="user_password" required>

        <label for="password_retype">Password Retype</label>
        <input type="password" id="password_retype" name="user_password_retype" required>

        <input class="btn btn-primary" type="submit" value="Soumettre">
    </form>
</section>
</body>
</html>