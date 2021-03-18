<?php

$conn = mysqli_connect('localhost', 'root','','internship');

$id =$_GET['USN'];

$q = " DELETE FROM `student` WHERE USN='$id'";
mysqli_query($conn,$q);

$qt = " DELETE FROM `test` WHERE USN ='$id'" ;
mysqli_query($conn,$qt);

$qts = " DELETE FROM `skills` WHERE USN ='$id'" ;
mysqli_query($conn,$qts);

$qtse = " DELETE FROM `company` WHERE USN ='$id'" ;
mysqli_query($conn,$qtse);

header('location: fetch.php');


?>