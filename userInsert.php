<?php
$servername = "localhost";
$username = "David3";
$password = "david";
$dbname = "users";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$first_Name = "Itachi";
$last_Name = "Monje";
$email = "itachi@monje.com";
$employee_ID = "whatever";
$password = "password";

$sql = "INSERT INTO r_users (first_Name, last_Name, email, employee_ID, password)
VALUES ('$first_Name', '$last_Name', '$email', '$employee_ID', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
