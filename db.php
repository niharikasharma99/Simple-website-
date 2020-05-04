<?php
$servername="localhost";
$username="root";
$password="";
$dbname="adventure";

$name=$_POST['fname'];
$surname=$_POST['lname'];
$email=$_POST['e'];
$dob=$_POST['d'];
$mnum=$_POST['num'];

$conn=mysqli_connect($servername,$username,$password,$dbname);
if($conn)
{
	echo "Connection sucessful ";
	echo "<br/>";
}
$query="INSERT INTO register VALUES('$name','$surname','$email','$dob','$mnum')";
$data=mysqli_query($conn,$query);
if($data)
{
	echo "Data Inserted";
}


?>