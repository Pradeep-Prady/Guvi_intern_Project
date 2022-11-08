<?php

$uname1 = $_POST['uname1'];
$email1  = $_POST['email1'];
$pass = $_POST['upswd1'];
$upswd2 = $_POST['upswd2'];


if (!empty($uname1) || !empty($email1) || !empty($upswd1) || !empty($upswd2) )
{

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "guvi";



// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()){
  die('Connect Error ('. mysqli_connect_errno() .') '
    . mysqli_connect_error());
}
else{
  $SELECT = "SELECT email1 From register Where email1 = ? Limit 1";
  $INSERT = "INSERT Into register (uname1 , email1 ,pass, upswd2 )values(?,?,?,?)";

//Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $email1);
     $stmt->execute();
     $stmt->bind_result($email1);
     $stmt->store_result();
     $rnum = $stmt->num_rows;

     //checking username
      if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("ssss", $uname1,$email1,$pass,$upswd2);
      $stmt->execute();
      echo header("Location: account.php");
     } else {
      echo "Someone already register using this email";
     }
     $stmt->close();
     $conn->close();
    }
} else {
 echo "All field are required";
 die();
}
?>