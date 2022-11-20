<?php

if(null($_GET['sensor'] || $_GET['location'] || $_GET['distance'])){
    $sensor = $_GET['sensor'];
    $location = $_GET['location'];
    $distance = $_GET['distance'];

    $servername ="localhost";
    $dbname ="sensor database";
    $username ="amy";
    $password ="1234";

    $conn = new mysqli($servername, $username, $password, $dbname);

    //check connection
    if($conn->connect_error){
        die("connection failed: ".$conn->connect_error);

    }

    $sql = "INSERT INTO sensordata(sensor, location, distance)
    VALUES ($sensor, $location, $distance)";

    if($conn->query($sql)===TRUE){
            echo "record created successfully";
        }
        else{
            echo "Error: ".$sql. "=>" . $conn->error;
        }
        $conn->close();
    }
    else{
        echo "No data added";
    }
?>