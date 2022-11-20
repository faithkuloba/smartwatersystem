<?php
if(isset($_POST["submit_file"]))
{
    $file = $_FILES["file"]["tmp_name"];
    $file_open = fopen($file, "r");

    while(($csv = fgetcsv($file_open, 1000, ",")) !== false)
    {
        $hours = $csv[0];
        $water_use = $csv[1];
        $arima = $csv[2];

        mysql_query("INSERT INTO water_demand VALUES ('$hours', '$water_use', '$arima')");
    }
} 
?>