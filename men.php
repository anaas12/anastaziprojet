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
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .product img {
            width: 150px;
            height: 150px;
        }

        .product .price {
            font-size: 24px;
            font-weight: bold;
            color: #f60;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="product">
            <div>
                <h3>Product Name</h3>
                <p>Product Description</p>
            </div>
            <div>
                <img src="https://via.placeholder.com/150" alt="Product Name">
                <p class="price">$99.99</p>
            </div>
        </div>
        <!-- Add more product blocks here -->
    </div>
</body>
</html>