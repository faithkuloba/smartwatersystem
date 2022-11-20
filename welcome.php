<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<?php


// $servername ="localhost";
// $dbname ="sensor database";
// $username ="amy";
// $password ="1234";


// $mysqli = new mysqli($servername, $user,
// 				$password, $database);

//Checking for connections
//  if ($mysqli->connect_error) {
//  	die('Connect Error (' .
//  	$mysqli->connect_errno . ') '.
//  	$mysqli->connect_error);
// }

// SQL query to select data from database
$sql = " SELECT id, flowrate1, flowrate2, flowrate3, pressure1, pressure2, pressure3, current, voltage FROM sensordata ";

//$rows = $result-> fetch_assoc();
//$result = $mysqli->query($sql);
//$mysqli->close();
?>

 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SMART HYDRO-INFORMATICS WATER DISTRIBUTION SYSTEM</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Style the header */
header {
  background-color: #666;
  padding: 30px;
  text-align: center;
  font-size: 25px;
  color: white;
}

/* Create two columns/boxes that floats next to each other */
nav {
  float: left;
  width: 30%;
  height: 450PX; /* only for demonstration, should be removed */
  background: #ccc;
  padding: 20px;
}

/* Style the list inside the menu */
nav ul li{
  list-style-type: none;
  padding: 20PX;
}

article {
  float: left;
  padding: 20px;
  width: 70%;
  background-color: #f1f1f1;
  height: 450PX; /* only for demonstration, should be removed */
}

/* Clear floats after the columns */
section::after {
  content: "";
  display: table;
  clear: both;
}

/* Style the footer */
footer {
  background-color: #777;
  padding: 10px;
  text-align: center;
  color: white;
}

/* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
@media (max-width: 600px) {
  nav, article {
    width: 100%;
    height: auto;
  }
}

table {
			margin: 0 auto;
			font-size: large;
			border: 1px solid black;
		}

		h1 {
			text-align: center;
			color: #006600;
			font-size: large;
			font-family: 'Gill Sans', 'Gill Sans MT',
			' Calibri', 'Trebuchet MS', 'sans-serif';
		}

		td {
			background-color: #E4F5D4;
			border: 1px solid black;
		}

		th,
		td {
			font-weight: bold;
			border: 1px solid black;
			padding: 10px;
			text-align: center;
		}

		td {
			font-weight: lighter;
		}
</style>
</head>
<body>
    <h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
    <header>
  <h2>SMART HYDRO-INFORMATICS WATER DISTRIBUTION SYSTEM</h2>
</header>

<section>
  <nav>
    <ul>
      <li><a href="#">DASHBOARD</a></li>
      <li><a href="graphs.html">GRAPHS</a></li>
      <li><a href="#">SETTINGS</a></li>
    </ul>
  </nav>
  
  <article>
    <section>
		<h1>SENSOR VALUES</h1>
		<!-- TABLE CONSTRUCTION -->
		<table>
			<tr>
        <th>ID</th>
				<th>Flow Rate1</th>
				<th>Flow Rate2</th>
				<th>Flow Rate3</th>
        <th>pressure1</th>
        <th>pressure2</th>
        <th>pressure3</th>
        <th>current</th>
        <th>voltage</th>
			</tr>
		
			<!-- <?php
				// LOOP TILL END OF DATA
                
				//while($rows = $result-> fetch_assoc())
				//{
			//?>
			<tr>
			//	<!-- FETCHING DATA FROM EACH
					ROW OF EVERY COLUMN -->
          <td><?php echo $row["id"];?></td>
				  <td><?php echo $row['flowrate1'];?></td>
				  <td><?php echo $row['flowrate2'];?></td>
				  <td><?php echo $row['flowrate3'];?></td>
          <td><?php echo $row['pressure1'];?></td>
          <td><?php echo $row['pressure2'];?></td>
          <td><?php echo $row['pressure3'];?></td>
          <td><?php echo $row['current'];?></td>
          <td><?php echo $row['voltage'];?></td>
			</tr>
			<!-- <?php
			//	}
		//	?> -->
		</table>
	</section>
   </article>
</section>

<footer>
  <p>Water availability is our priority</p>
</footer>

</body>
</html>