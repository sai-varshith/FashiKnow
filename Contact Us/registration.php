<?php
$username = $_POST['username'];
$email = $_POST['email'];
$message = $_POST['message'];
//Database Connection
$conn = new mysqli('localhost','root','','webathon');
if ($conn->connect_error) {
    die('Connection Failed'.$conn->connect_error);
}
else{
    $stmt = $conn->prepare("insert into contact(username, email, message) values(?,?,?)");
    $stmt->bind_param('sss',$username, $email, $message);
    $stmt->execute();
    echo "Registration Successfull";
    $stmt->close();
    $conn->close();
}

?>