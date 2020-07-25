<?php
$servername = "localhost";
$username="root";
$password="";
$db="omshanti";

$EMPLOYEE_NAME=$_POST['name'];
$GENDER=$_POST['gender'];
$EMPLOYEE_NUMBER=$_POST['employeeno'];
$CONTACT_NUMBER=$_POST['mobile'];
$EMAIL_ADDRESS=$_POST['email'];
$RESIDENCE_ADDRESS=$_POST['address'];
$JOB_LOCATION=$_POST['country'];
$DESIGNATION=$_POST['designation'];
$FAX_NUMBER=$_POST['fax'];
$JOB_EXPERIENCE=$_POST['experience'];
$DATE_OF_JOINING=$_POST['date'];
$SALARY=$_POST['salary'];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO employee (EMPLOYEE_NAME	, GENDER ,EMPLOYEE_NUMBER , CONTACT_NUMBER, EMAIL_ADDRESS, RESIDENCE_ADDRESS,JOB_LOCATION,DESIGNATION,FAX_NUMBER,JOB_EXPERIENCE,DATE_OF_JOINING,SALARY) VALUES('$EMPLOYEE_NAME','$GENDER',$EMPLOYEE_NUMBER,$CONTACT_NUMBER,'$EMAIL_ADDRESS','$RESIDENCE_ADDRESS','$JOB_LOCATION','$DESIGNATION',$FAX_NUMBER,'$JOB_EXPERIENCE','$DATE_OF_JOINING',$SALARY)";


if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>