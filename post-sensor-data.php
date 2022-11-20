<?php

$servername ="localhost";
$dbname ="sensor database";
$username ="amy projects";
$password ="1234";

$api_key_value ="tPmAT5Ab3j7F9";

$api_key = $sensor = $location = $value1 =$value2 = $distance = "";
if($_SERVER["REQUEST METHOD"]=="POST"){
    if($api_key == $api_key_value){
        $sensor = test_input($_POST["sensor"]);
        $location = test_input($_POST["location"]);
        $distance = test_input($_POST["distance"]);

        //create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        //check connection
        if($conn->connect_error){
            die("connection failed: ".$conn->connect_error);

        }

        $sql = "INSERT INTO sensordata(sensor, location, distance)
        VALUES ($sensor, $location, $distance)";

        if($conn->query($sql)===TRUE){
            echo "New record created successfully";
        }
        else{
            echo "Error: ".$sql. "<br>" . $conn->error;
        }
        $conn->close();
    }
    else{
        echo "Wrong API Key Provided";
    }
}
else{
    echo "No data posted with HTTP POST.";
}

function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
}