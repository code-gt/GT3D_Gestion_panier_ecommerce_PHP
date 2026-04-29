<?php
// TODO: Démarrer la session PHP

// Récupérer votre tableau de produits crées sur l'index

// TODO: Récupérer le panier depuis \$_SESSION
// Si la session n'existe pas, initialiser avec un tableau vide

// Créer une variable pour le total à payer et l'initialiser à 0
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Mon panier</title>
    <link rel="stylesheet" href="https://unpkg.com/@picocss/pico@1.5.10/css/pico.min.css">
</head>
<body>
    <main class="container">
        <h1>Mon panier</h1>
        <a href="index.php">← Retour à la boutique</a>

        <!-- TODO: Vérifier si le panier est vide -->
        <!-- Si vide : afficher "Ton panier est vide." -->
        <!-- Sinon : afficher le tableau du panier -->
        
        <?php if (/* TODO */) { ?>
            <p>Ton panier est vide.</p>
        <?php } else { ?>
            <table>
                <thead>
                    <tr>
                        <th>Produit</th>
                        <th>Quantité</th>
                        <th>Prix unitaire</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- TODO: Boucler sur le panier (\$_SESSION['panier']) -->
                    <!-- Pour chaque ligne : afficher le nom, la quantité, le prix unitaire, le total -->
                    <!-- Important : calculer le total par article ET le total global -->
                    <!-- Utiliser htmlspecialchars() pour sécuriser l'affichage du nom -->
                    <?php foreach (/* TODO */) {
                        // TODO: Récupérer le produit correspondant dans le tableau \$produits
                        
                        // TODO: Calculer le total pour cet article
                        
                        // TODO: Ajouter au total global (incrémenter)
                    ?>
                    <tr>
                        <td>/* Afficher le nom */</td>
                        <td>/* Afficher la quantité */</td>
                        <td>/* Afficher le prix unitaire */ +  €</td>
                        <td>/* Afficher le total */ + €</td>
                    </tr>
                    <?php } ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th colspan="3">Total</th>
                        <th></* Afficher le total */ €</th>
                    </tr>
                </tfoot>
            </table>

            <!-- TODO: Créer un formulaire pour vider le panier -->
            <!-- Le formulaire doit rediriger vers reset.php en POST -->
            <form>
                <button type="submit">Vider le panier</button>
            </form>
        <?php } ?>
    </main>
</body>
</html>
