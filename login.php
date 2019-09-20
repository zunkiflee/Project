<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
</head>
<body>
  <?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbq";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


        if (isset($_POST['submit'])) {
            $username = $_POST['username'];
            $password = $conn->real_escape_string($_POST['password']);
           
            $sql = "SELECT * FROM `member` WHERE `username` = '".$username."' AND `password` = '".$password."' ";
                    
            $result = $conn->query($sql);

            if($result->num_rows > 0){
                $row = $result->fetch_assoc();
                $_SESSION['id'] = $row['id'];
                $_SESSION['name'] = $row['name'];
                header('location:admin.php');
            
            }else{
              echo 'username $ password is invalid';
         }
    }
?>

    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto mt-5">
                <div class="card">
                    <form action="" method="POST">
                    <div class="card-header text-center">
                         Log in
                    </div>
                    <div class="card-body">
                    <div class="form-group row">
                        <label for="username" class="col-sm-3 col-form-label">Username</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="username" name="username">
                            </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" class="col-sm-3 col-form-label">Password</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" id="password" name="password">
                        </div>
                        </div>
                    </div>
                    <div class="card-footer text-center">
                        <input type="submit" name="submit" class="btn btn-success" value="Login">
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>

</body>

</html>