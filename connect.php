<?php
$name = $_POST["name"];
$number = $_POST["number"];
$email = $_POST["email"];
$organizations = $_POST["organizations"];
$message = $_POST["message"];

// Database connection 

$conn  = new mysqli('localhost','root','','mediologic');
if(conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into book a demo(name, number, email, organization, message) values(?, ?, ?, ?, ?,)")
    $stmt->bind_param("ssssi",$name, $number, $email, $organizations, $message);
    $stmt->execute();
    echo "Thank you for message....";
    $stmt->close();
    $conn->close();
}

?>