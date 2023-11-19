<?php

$servername = "localhost";
$username = "root";
$password ="";
$db = "webapp";

$con = mysqli_connect($servername,$username,$password, $db);

if (!$con){
    echo "Could not connect to server";
}
// else{
//     echo "Connecting to server successfully df";
// }

$sql = "SELECT * FROM contact_t";
$exe = mysqli_query($con, $sql);




?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="images/fevicon(40 x 40 px) (1).png">
    <title>Contact List</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="container">

<h1 class="text-center bg-success mt-3">Contact Information From DB</h1>

   

<div class="container bg-success table-responsive mt-2 p-3 tbl ">
      <table class="table table-success table-striped-columns ">
        <thead>
          <tr>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">Message</th>
          </tr>
        </thead>
        <tbody class="table-group-divider">
          <tr>
            <?php
            while ($row = mysqli_fetch_array($exe)) 
            {
              ?>
           

       
            <td><?php echo $row ['fname']." ". $row ['lname']?></td>
            <td><?php echo $row ['email']?></td>
            <td><?php echo $row ['phone'] ?></td>
            <td><?php echo $row ['massage'] ?></td>
            
          </tr>
          <?php
            }
            ?>
        </tbody>
      </table>

      <div class="container d-flex justify-content-end">
      <a href="index.html"><button type="submit"  class="btn btn-danger">Back to Contact Form</button>  
</a>
      

      </div>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>