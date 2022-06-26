<?php
session_start();
include "db_connect.php";
if(isset($_POST['submit'])){
	$email=$_POST['email'];
	$password=$_POST['password'];
	$email_query="select * from users where email='$email'"; //email checking
	$query=mysqli_query($con,$email_query);
	$email_count=mysqli_num_rows($query);
	if($email_count){
        $email_pass = mysqli_fetch_assoc($query);
        $db_pass=$email_pass['password'];
        $_SESSION['username']=$email_pass['username']; //to display in the frontEnd
        $_SESSION['password']=$email_pass['password'];
        $_SESSION['email']=$email_pass['email'];
        $_SESSION['mobileNumber']=$email_pass['mobileNumber'];
        $pass_decode=password_verify($password,$db_pass);

        if($pass_decode){
	        echo "<script>location.href='home.php'</script>";
        }
        else{
         echo "<script>alert('Password is Incorrect')</script>";
         echo "<script>location.href='index.php'</script>";


        }
    }
     else{
       echo "<script>alert('Invalid Email')</script>";
       echo "<script>location.href='index.php'</script>";

        }



}
?>