<!DOCTYPE html>
<html>
<body>
<?php

$servername = "localhost";
$dbname = "sensor database";
$username ="amy";
$password ="1234";

//create connection
$conn = new mysqli($servername, $username, $password, $dbname);

//check connection
if($conn->connect_error){
    die("connection failed: " .$conn->connect_error);
}
//strtotime("$row_reading_time + 4 hours");
$conn->close();
?>
</table>
</body>
</html>
