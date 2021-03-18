<?php

	// get the post records
	$FirstName = $_POST['firstName'];
	$LastName = $_POST['lastName'];
	$Email = $_POST['email'];
	$date = $_POST['date'];
	$company=$_POST['company'];
	$job=$_POST['job'];
	$EQ=$_POST['EQ'];
	$SKILL=$_POST['SKILL'];
	$IQ=$_POST['IQ'];
	$lvl=$_POST['lvl'];
	
	$conn = mysqli_connect('localhost', 'root','','internship');
	if($conn->connect_error)
	{
		die('Connection Failed:'.$conn->connect_error);
	}

	else
	{
		$query= "insert into student(Usn, Name, email, dob) values('$FirstName', '$LastName', '$Email', '$date')";
		echo $query;

		if($conn->query($query)==true)
		{
			echo "successfull inserted";
		}

		else{
			 echo "error: $query <br> $conn->error";
		}


		
		
		foreach($company as $key => $value)
		{
			echo "$value";
		}

		foreach($job as $key => $val)
		{
			echo "$val";
		}

		$q="insert into company(usn,Job_title, company_name) values('$FirstName','$val','$value')";

		echo $q;

		$conn->query($q);

		$Qt="insert into test(usn, EQ ,IQ) values('$FirstName','$EQ','$IQ')";

		echo $Qt;

		$conn->query($Qt);

		$Qt2="insert into skills(usn, skill, Proficiency) values('$FirstName','$SKILL','$lvl')";

		echo $Qt2;

		$conn->query($Qt2);

	}

	$conn->close();
	header('location: ../../success.html');
?>