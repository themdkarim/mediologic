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
    $stmt->bind_param("sssss",$name, $number, $email, $organizations, $message);
    $stmt->execute();
    echo "Thank you for message....";
    $stmt->close();
    $conn->close();
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Demo</title>
    <link rel="stylesheet" href="./form.css">
</head>
<body>
    <div class="container">
        <form post="method">
            <h2 style="color: #4060b3; font-weight: 600; font-size: xx-large;" >Book a Demo</h2>
            <div class="input-group">
                <input type="text" id="name" name="name" required>
                <label for="name">Name</label>
            </div>
            <div class="input-group">
                <input type="text" id="phone" name="phone" required>
                <label for="phone">Phone Number</label>
            </div>
            <div class="input-group">
                <input type="email" id="email" name="email" required>
                <label for="email">Email</label>
            </div>
            <div class="input-group">
                <input type="text" id="name" name="organizations name" required>
                <label for="name"> organizations Name</label>
            </div>
            <div class="input-group">
                <textarea id="message" name="message" required></textarea>
                <label for="message">Message</label>
            </div>
            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>
