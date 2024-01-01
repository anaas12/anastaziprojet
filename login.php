<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #dc3545;
            text-align: center;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #dc3545;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        button:hover {
            background-color: #c82333;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Login</h1>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
            <label for="email">Email:</label>
            <input type="email" id="email" name="emailName" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="passwordName" required>

            <button type="submit" name="submit">Login</button>
        </form>

        <?php
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $emailValue = $_POST["emailName"];
            $passwordValue = $_POST["passwordName"];

            if(empty($emailValue) || empty($passwordValue)){
                echo "<h1>Values are empty</h1>";
            }else{
                echo '<h1>Welcome, your information:</h1>';
                echo "<p>Email: $emailValue</p>";
                echo "<p>Password: $passwordValue</p>";
            }
        }else{
            echo "<p>You are not using the POST method!</p>";
        }
        ?>
    </div>
</body>
</html>