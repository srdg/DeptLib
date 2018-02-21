<?php
// define variables and set to empty values
$name = $email = $phone= $roll = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{

	if (empty($_POST["name"])) 
	{
    	$nameErr = "Name is required";
  	} 
  	else 
  	{
    	$name = test_input($_POST["name"]);
    	// check if name only contains letters and whitespace
    	if (!preg_match("/^[a-zA-Z ]*$/",$name)) 
    	{
      		$nameErr = "Only letters and white space allowed"; 
      	}
    }

	if (empty($_POST["email"])) 
	{
    	$emailErr = "Email is required";
  	} 
  	else 
  	{
    	$email = test_input($_POST["email"]);
    	// check if e-mail address is well-formed
    	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
    	{
      	$emailErr = "Invalid email format"; 
    	}
  	}

if (empty($_POST["Phone"])) 
	{
    	$phoneErr = "Phone is required";
  	} 
  	else 
  	{
    	$phone = test_input($_POST["phone"]);
    }

if (empty($_POST["roll"])) 
	{
    	$rollErr = "Roll Number required";
  	} 
  	else 
  	{
    	$roll = test_input($_POST["roll"]);
    }


}


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

include 'db_connection.php';
 
$conn = OpenCon();
 
$name = $conn->real_escape_string($name);
$email = $conn->real_escape_string($email);
$roll = $conn->real_escape_string($roll); 
$phone = $conn->real_escape_string($phone);
echo "Connected Successfully";
 
$sql = "INSERT INTO `TestRun` (NAME, EMAIL, ROLL , PHONE) VALUES ('$name', '$email', '$roll', '$phone')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

CloseCon($conn);



?>
