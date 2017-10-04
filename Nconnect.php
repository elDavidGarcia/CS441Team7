<?php 
require_once 'Nlogin.php';
$conn = new mysqli($hn, $un, $pw, $db);
if($conn->connect_error) die($conn->connect_error);



if(isset($post['employeeID'])  &&
   isset($post['password1']))
{
  $EID  = get_post($conn, 'employeeID');
  $P1   = get_post($conn, 'password1'); 
  $query       = "INSERT INTO log VALUES" . 
    "('$employeeID', 'password1')";
  $result      = $conn->query($query); 
  if(!$result) echo "INSERT failed: $query<br>" .
    $conn->error . "<br><br>";
     $query= "INSERT INTO `log` (`employeeID`, `password1`) VALUES ('1234', 'hello')";
}   

$query   = "SELECT* FROM log"; //change user to whatever database name we use
$result = $conn->query($query);
if(!$result) die ("Database access failed: " . $conn->error);

$result->close();
$conn->close();

function get_post($conn, $var)
{
  return $conn->real_escape_string($_post[$var]);
}
?>
