
<?php

$email  = $_POST['email'];
$pass = $_POST['pass'];

// echo $email;

    
// Create connection
$con = new mysqli ("localhost","root", "", "guvi");

if($con->connect_error){
    die("Failed to connect : ".$con->connect_error);
}
else{
    $stmt = $con->prepare("select * from register where email1 = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt_result = $stmt->get_result();

    if($stmt_result->num_rows > 0){
        $data = $stmt_result->fetch_assoc();
        if($data['pass']===$pass){
            echo header("Location: account.php");
        }
        else{
            echo "<h2>invalid</h2>";
        }
    }
    else{
        echo "<h2>error</h2>";
    }
}

?>