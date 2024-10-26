<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire de test de police</title>
</head>
<body>

    <?php
    // Déclaration des variables pour éviter les erreurs si le formulaire n'est pas encore soumis
    $message = "";
    $taille = 16;
    $couleur = "#000000";
    $afficherMessage = false;

    // Traitement du formulaire après la soumission
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $message = htmlspecialchars($_POST['message']);
        $taille = intval($_POST['taille']);
        $couleur = htmlspecialchars($_POST['couleur']);
        $afficherMessage = true;
    }
    ?>

    <!-- Formulaire avec méthode POST -->
    <form action="" method="POST">
        <label for="message">Message :</label><br>
        <textarea id="message" name="message" rows="4" cols="50" required><?php echo $message; ?></textarea><br><br>

        <label for="taille">Taille (en px) :</label>
        <input type="number" id="taille" name="taille" min="10" max="100" value="<?php echo $taille; ?>" required><br><br>

        <label for="couleur">Couleur :</label>
        <input type="color" id="couleur" name="couleur" value="<?php echo $couleur; ?>" required><br><br>

        <button type="submit">Envoyer</button>
    </form>

    <?php
    // Affichage du message stylisé après soumission
    if ($afficherMessage) {
        echo "<p style='font-size:{$taille}px; color:{$couleur};'>Votre message : $message</p>";
    }
    ?>

</body>
</html>
