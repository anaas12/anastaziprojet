<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Page</title>
    <style>
        .container {
            width: 80%;
            margin: auto;
            padding: 20px;
        }

        .product {
            border: 1px solid #ddd;
            padding: 20px;
            margin-bottom: 20px;
            position: relative;
        }

        .product img {
            width: 100%;
            height: auto;
        }

        .product h2 {
            margin-bottom: 10px;
        }

        .product .price {
            font-size: 24px;
            color: #333;
            margin-bottom: 10px;
        }

        .product .description {
            margin-bottom: 10px;
        }

        .product .add-to-cart {
            background-color: #f0ad4e;
            color: #fff;
            text-align: center;
            padding: 10px;
            border-radius: 5px;
            position: absolute;
            bottom: 20px;
            right: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="product">
            <img src="https://via.placeholder.com/150" alt="Product Image">
            <h2>Product Name</h2>
            <span class="price">$100</span>
            <p class="description">This is a product description.</p>
            <button class="add-to-cart">Add to Cart</button>
        </div>
        <div class="product">
            <img src="https://via.placeholder.com/150" alt="Product Image">
            <h2>Product Name</h2>
            <span class="price">$100</span>
            <p class="description">This is a product description.</p>
            <button class="add-to-cart">Add to Cart</button>
        </div>
        <div class="product">
            <img src="https://via.placeholder.com/150" alt="Product Image">
            <h2>Product Name</h2>
            <span class="price">$100</span>
            <p class="description">This is a product description.</p>
            <button class="add-to-cart">Add to Cart</button>
        </div>
    </div>
</body>
</html>