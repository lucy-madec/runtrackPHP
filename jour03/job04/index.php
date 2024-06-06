<?php
// Définir une classe Product
class Product {
    public $name;
    public $price;
    public $quantity;

    public function __construct($name, $price, $quantity) {
        $this->name = $name;
        $this->price = $price;
        $this->quantity = $quantity;
    }
}

// Créer une liste de produits
$products = [
    new Product("Produit 1", 120, 2),
    new Product("Produit 2", 80, 5),
    new Product("Produit 3", 150, 1),
    new Product("Produit 4", 60, 3)
];

// Appliquer une réduction si le prix est supérieur à 100€
function applyDiscount(&$products) {
    foreach ($products as $product) {
        if ($product->price > 100) {
            $product->price *= 0.9; // Appliquer une réduction de 10%
        }
    }
}

// Appeler la fonction pour appliquer les réductions
applyDiscount($products);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des produits</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 25px 0;
            font-size: 18px;
            text-align: left;
        }
        th, td {
            padding: 12px;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Liste des produits</h1>
    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prix</th>
                <th>Quantité</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $product): ?>
                <tr>
                    <td><?= htmlspecialchars($product->name) ?></td>
                    <td><?= number_format($product->price, 2) ?> €</td>
                    <td><?= htmlspecialchars($product->quantity) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
