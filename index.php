<?php
// TODO: Démarrer la session PHP

// Créer un tableau associatif de produits avec pour chaque produit un ID, un nom, un prix

// TODO: Vérifier si l'utilisateur a soumis un formulaire (méthode POST)
// Vérifier que le champ 'produit_id' existe dans la requête
if (/* TODO */) {
    // TODO: Récupérer l'ID du produit depuis \$_POST et le convertir en entier
    
    // TODO: Vérifier si cet article n'existe pas déjà dans le panier (\$_SESSION['panier'][\$id])
    if (/* TODO */) {
        // Si c'est la première fois : initialiser la quantité à 1
    } else {
        // Sinon : incrémenter la quantité
      
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ma boutique</title>
    <link rel="stylesheet" href="https://unpkg.com/@picocss/pico@1.5.10/css/pico.min.css">
</head>
<body>
    <main class="container">
        <h1>Ma petite boutique</h1>
        <a href="panier.php">Voir mon panier 🛒</a>

        <div class="grid">
            <!-- TODO: Boucler sur le tableau \$produits -->
            <!-- Pour chaque article, afficher : nom, prix, bouton "Ajouter au panier" -->
            <?php foreach (/*TODO*/) { ?>
            <article>
                <h3>/* Afficher le nom du produit */</h3>
                <p>/* Afficher le prix du produit + € */</p>
                <form method="post">
                    <!-- TODO: Ajouter un input caché pour envoyer l'ID du produit -->
                    <!-- Tip: type="hidden", name="produit_id", value=id du produit -->
                    <button type="submit">Ajouter au panier</button>
                </form>
            </article>
            <?php } ?>
        </div>
    </main>
</body>
</html>
