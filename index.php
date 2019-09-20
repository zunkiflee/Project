<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Project</title>
  <link rel="stylesheet" href="style.css">
  
  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/business-frontpage.css" rel="stylesheet">

  <script type = "text/JavaScript">
         <!--
            function AutoRefresh( t ) {
               setTimeout("location.reload(true);", t);
            }
       
      </script>
</head>

<body onload = "JavaScript:AutoRefresh(5000);">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">ปริญญานิพนธ์</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="login.php">Admin
              <span class="sr-only">(current)</span>
            </a>
          </li>
          
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header -->
  <header class="bg-primary py-1 mb-5">
    <div class="container h-100 ">
      <div class="row h-100 align-items-center">
        <div class="col-lg-12 ">
          <h1 class="display-4 text-white text-center mt-5 mb-2 ">ระบบออกบัตรคิว</h1>
          <p class="display-4  text-white text-center mt-5 mb-2 ">กรณีศึกษาโรงพยาบาลสะเดา</p>
        </div>
      </div>
    </div>
  </header>

  <!-- Page Content -->
  <div class="container">
           
  <table class="table table-bordered">
    <thead class="cus">
      <tr>
        <th>หมายเลข </th>
        <th>แผนกที่ </th> 
      </tr>
    </thead>
<?php
    include('config.php');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
       
$sql = "SELECT max(qa) as qa,dp_id FROM qe_queue WHERE status = 1 GROUP BY dp_id ";
  $result = $conn->query($sql);
    // Process every record
  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" ."<center>". $row['qa'] ."</center>"."</td>";
        echo "<td>" ."<center>". $row['dp_id'] ."</center>"."</td>";
        echo "</tr>";
        // Close the connection   
}
} else {
    echo "0 results";
}
    $conn->close();
?>


  </table>
</div>
   
    
    <!-- /.row -->

    
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-2 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
