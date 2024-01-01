<?php
class Main {
    private $database;

    public function __construct() {
        $this->database = new Database();
    }

    public function getProducts() {
        $products = $this->database->fetchAll('SELECT * FROM products');
        return $products;
    }

    public function displayProducts($products, $price) {
        echo '<table>';
        echo '<tr><th>Name</th><th>Price</th></tr>';

        foreach ($products as $product) {
            $productPrice = $product['price'] - ($product['price'] * $price / 100);
            echo '<tr><td>' . $product['name'] . '</td><td>' . number_format($productPrice, 2) . '</td></tr>';
        }

        echo '</table>';
    }
}
    require_once 'database.php';
    require_once 'category.php';

    $main = new Main();
    $products = $main->getProducts();
    $price = 10; // Prix en pourcentage à appliquer

    $main->displayProducts($products, $price);

?>
<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <?php
    require_once 'database.php';
    require_once 'Main.php';

    $main = new Main();
    $products = $main->getProducts();
    $price = 10; // Prix en pourcentage à appliquer

    $main->displayProducts($products, $price);
    ?>
</body>
</html>