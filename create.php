<?php
//include connection file
include('connection.php');
   

//create in instance of class Connection
$connection = new Connection();


//call the selectDatabase method
$connection->selectDatabase('projet2');
$emailValue = "";
$lnameValue = "";
$fnameValue = "";
$passwordValue = "";
$errorMesage = "";
$successMesage = "";
if(isset($_POST["submit"])){

    $emailValue = $_POST["email"];
    $lnameValue = $_POST["lastName"];
    $fnameValue = $_POST["firstName"];
    $passwordValue = $_POST["password"];
    $idCityValue=$_POST["cities"];

    if(empty($ema  ilValue) || empty($fnameValue) || empty($lnameValue) || empty($passwordValue)){

            $errorMesage = "all fileds must be filed out!";

    }else if(strlen($passwordValue) < 8 ){
        $errorMesage = "password must contains at least 8 char";
    }else if(preg_match("/[A-Z]+/", $passwordValue)==0){
        $errorMesage = "password must contains  at least one capital letter!";
    }else{
       
    
    //include the client file
    include('client.php');

    //create new instance of client class with the values of the inputs
    $client = new Client($fnameValue,$lnameValue,$emailValue,$passwordValue,$idCityValue);

//call the insertClient method
$client->insertClient('Clients',$connection->conn);

//give the $successMesage the value of the static $successMsg of the class
$successMesage = Client::$successMsg;

//give the $errorMesage the value of the static $errorMsg of the class
$errorMesage = Client::$errorMsg;

$emailValue = "";
$lnameValue = "";
$fnameValue = "";   
      
    }
}
$category = new Category(1, "Men", "Clothing for men");
$category->create($servername, $username, $password, $dbname);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            padding: 20px;
            width: 400px;
            text-align: center;
        }

        h2 {
            color: #333;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #555;
        }

        input {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
            border: 1px solid #ddd;
            border-radius: 4px;
            margin-bottom: 16px;
        }

        select {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
            border: 1px solid #ddd;
            border-radius: 4px;
            margin-bottom: 16px;
        }

        button {
            background-color: #4caf50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #45a049;
        }

        .btn-outline-primary {
            border-color: #4caf50;
            color: #4caf50;
        }

        .btn-outline-primary:hover {
            background-color: #4caf50;
            color: white;
        }

        .alert {
            margin-top: 16px;
        }
    </style>
</head>
<body>
    <div class="container my-5">
        <h2>SIGN UP</h2>

        <?php
        if (!empty($errorMesage)) {
            echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
                <strong>$errorMesage</strong>
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>";
        }
        ?>

        <form method="post">
            <label for="fname">First Name:</label>
            <input value="<?php echo $fnameValue ?>" class="form-control" type="text" id="fname" name="firstName">

            <label for="lname">Last Name:</label>
            <input value="<?php echo $lnameValue ?>" class="form-control" type="text" id="lname" name="lastName">

            <label for="email">Email:</label>
            <input value="<?php echo $emailValue ?>" class="form-control" type="email" id="email" name="email">

         <label for="cities">Cities:</label> 
             <select name='cities' class="form-select"> 
                 <option selected>Select your city</option> 
                <!-- Add options dynamically if needed -->
           <?php
           include('city.php');
           $cities=City::selectAllcities('cities',$connection->conn);
          foreach ($Cities as $City ) {
            
            echo"<option value='$city[id]'>$city[name]</option>";
          }
          ?>
            </select>

            <label for="password">Password:</label>
            <input class="form-control" type="password" id="password" name="password">

            <?php
            if (!empty($successMesage)) {
                echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                        <strong>$successMesage</strong>
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                    </div>";
            }
            ?>

            <div class="row mt-3">
                <div class="col-sm-6">
                    <button name="submit" type="submit" class="btn btn-primary">Signup</button>
                </div>
                <div class="col-sm-6">
                    <a class="btn btn-outline-primary" href="#">Login</a>
                </div>
            </div>
        </form>
    </div>
</body>
</html>
