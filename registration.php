<?php
include 'db_connect.php'; //connection
if(isset($_POST['submit'])){
	$username=mysqli_real_escape_string($con,$_POST['username']); //store the username in the variable 1
    $email=mysqli_real_escape_string($con,$_POST['email']);
    $mobile=mysqli_real_escape_string($con,$_POST['mobile']);
    $password=mysqli_real_escape_string($con,$_POST['password']);
    $cpassword=mysqli_real_escape_string($con,$_POST['cpassword']);
    
    $pass=password_hash($password,PASSWORD_BCRYPT);  //Used for Encrypt the Password
    $cpass=password_hash($cpassword,PASSWORD_BCRYPT); 

    $emailquery="select * from users where email='$email'";
    $query=mysqli_query($con,$emailquery);
    $emailcount=mysqli_num_rows($query);

    if($emailcount>0){
    	echo "<script>alert('Email already Exists')</script>";
    	echo "<script>location.href='index.php'</script>";

    }
    else{
    	if($password === $cpassword){
    $insertquery="insert into users(username,email,mobileNumber,password,currentpassword) values('$username','$email','$mobile','$pass','$cpass')";
    		$iquery=mysqli_query($con,$insertquery);
    		if ($iquery) {
    			echo "<script>alert('Successfully created an account in FashiKnow')</script>";
	            echo "<script>location.href='home.php'</script>";
	          
                       }
             else{
             	echo "<script>alert('There was an Error while creating account')</script>";
	            echo "<script>location.href='index.php'</script>";
	         
	       
                 }


    	}
    	else{
        echo "<script>alert('Passwords are not maching')</script>";
        echo "<script>location.href='index.php'</script>";


    	}
    }

 

  }
    


?>