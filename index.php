<?php
$servername = "localhost";
$username = "root";
$password ="";
$db = "webapp";

$con = mysqli_connect($servername,$username,$password, $db);

if (!$con){
    echo "Could not connect to server";
}
else{
    echo "Connecting to server successfully df";
}

$fname= $_POST["fname"];
$lname = $_POST['lname']; 
$phone = $_POST['phone'];
$email  = $_POST['email'];
$msg = $_POST['msg'];

$sql = "INSERT INTO `contact_t`(`fname`, `lname`, `phone`, `email`, `massage`) VALUES ('$fname','$lname','$phone','$email','$msg')";
$exe = mysqli_query($con, $sql);
if (!$exe){
    echo "Server Error";
}
else{
    echo header('location:index.html');
}
?>