<?php

$servername ="localhost";
$dbname ="sensor database";
$username ="amy";
$password ="1234";

// CREATE CONNECTION
$conn = new mysqli($servername,
	$username, $password, $dbname);

// GET CONNECTION ERRORS
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

// SQL QUERY
$query = "SELECT * FROM `sensordata`;";

// FETCHING DATA FROM DATABASE
$result = $conn->query($query);

	if ($result->num_rows > 0)
	{
		// OUTPUT DATA OF EACH ROW
		while($row = $result->fetch_assoc())
		{
			echo "id: " .
				$row["id"]. " - Flow rate1: " .
				$row["flowrate1"]. " | Flow rate2: " .
				$row["flowrate2"]. " | Flow Rate3: " .
				$row["flowrate3"]. "<br>";
		}
	}
	else {
		echo "0 results";
	}

$conn->close();

?>
