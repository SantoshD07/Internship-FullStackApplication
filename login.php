<?php

    $user = $_POST['user'];
    $pass = $_POST['password'];

    $conn = mysqli_connect('localhost', 'root','','internship');
	if($conn->connect_error)
	{
		die('Connection Failed:'.$conn->connect_error);
	}


    else
    {
        $q= " Select * from users where username ='$user' && password ='$pass'";

        $result= mysqli_query($conn,$q);
        $num= mysqli_num_rows($result);

        if($num==1)
        {
           $_SESSION['username']=$user;
           header('location:select.php'); 
        }

        else
        {
           echo "Not the Admin";
        }

       
    }