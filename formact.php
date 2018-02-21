<?php
// define variables and set to empty values
$name = $email = $phone= $roll = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{



function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

include 'db_connection.php';
 
$conn = OpenCon();
echo "Connected Successfully";
 
if (isset($_POST['submit'])) {

$name = test_input($_POST["name"]);
$email = test_input($_POST["email"]);
$phone = test_input($_POST["phone"]);
$roll = test_input($_POST["roll"]);


$name = $conn->real_escape_string($name);
$email = $conn->real_escape_string($email);
$roll = $conn->real_escape_string($roll); 
$phone = $conn->real_escape_string($phone);
}

$sql = "INSERT INTO `TestRun` (NAME, EMAIL, ROLL , PHONE) VALUES ('$name', '$email', '$roll', '$phone')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;


}
CloseCon($conn);

}

?>
