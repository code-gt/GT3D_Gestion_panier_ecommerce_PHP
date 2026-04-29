
# 🛒 TP Panier avec Sessions

## 📋 Objectifs

- ✅ Maîtriser les **sessions PHP** pour stocker des données utilisateur

- ✅ Implémenter un **système de panier** persistant

- ✅ Manipuler les **tableaux associatifs** en PHP

- ✅ Traiter les **formulaires POST**

- ✅ Calculer des **totaux dynamiques**

- ✅ Sécuriser l'affichage avec `htmlspecialchars()`

---

## 📁 Structure du TP

panier-tp/
├── index.php # Page d'accueil avec catalogue de produits
├── panier.php # Page d'affichage du panier
├── reset.php # Script de réinitialisation du panier


---

## 🎯 Fichiers à Compléter

### **1️⃣ index.php** - La boutique
**Tes tâches :**
1. Démarre la session
2. Vérifie si un formulaire a été soumis (POST)
3. Récupère l'ID du produit et l'ajoute au panier en session
4. Ajoute l'input caché dans le formulaire pour envoyer le produit_id

**Points clés :**

- Utilise `isset($_SESSION['panier'][$id])` pour vérifier si l'article existe

- Initialise à quantité `1` si c'est la première fois

- Incrémente la quantité sinon

---

### **2️⃣ panier.php** - Le panier
**Tes tâches :**
1. Démarre la session
2. Récupère le panier depuis `$_SESSION['panier']` (avec opérateur `??` par défaut)
3. Affiche un message si le panier est vide
4. Boucle sur le panier et affiche chaque article dans un tableau
5. Calcule le total par article et le total global
6. Crée un formulaire pour vider le panier

**Points clés :**

- `$_SESSION['panier']` est un array : clé = ID produit, valeur = quantité

- Calcule le sous-total : `prix × quantité`

- Utilise `htmlspecialchars()` pour sécuriser les noms affichés

---

### **3️⃣ reset.php** - Réinitialisation
**Tes tâches :**
1. Démarre la session
2. Supprime le panier avec `unset()`
3. Redirige vers panier.php avec `header()`
4. Termine l'exécution avec `exit;`

**Points clés :**
- C'est le script le plus court !

- Il ne doit rien afficher avant le `header()`

---

## 🔍 Conseils de développement

### **Débogage**
Pour vérifier le contenu de ta session :
```php
<?php
session_start();
echo '<pre>';
var_dump($_SESSION);
echo '</pre>';
?>
