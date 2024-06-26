<?php
include "..\data_con.php";


$response = array("status" => "", "message" => "");

$apiKey = "W5qM3sE7gP1aK9jR4fY6lC2zX8wB0vN3dF6xH1tG2uL4iV9oU5yJ7cQ8hT4nZ7eD9bI0pA3mR8kS6oV1fC2xN4uG5lW6jQ9dX2yH3tF7wE8zB1vM0iK";


if (!isset($_GET['api_key']) || $_GET['api_key'] !== $apiKey) {
    $response["status"] = "error";
    $response["message"] = "Unauthorized access. Please provide a valid API key.";
    echo json_encode($response);
    exit; 
}

if (isset($_GET['waterflow'])) {
    $waterflow = $conn->real_escape_string($_GET['waterflow']);
    $waterflowSql = "INSERT INTO waterflow (flow_readings) VALUES ('$waterflow')";
    if ($conn->query($waterflowSql) === TRUE) {
        $response["status"] = "success";
        $response["message"] = "Waterflow data inserted successfully!";
    } else {
        $response["status"] = "error";
        $response["message"] = "Error inserting waterflow data: " . $conn->error;
    }
}

if (isset($_GET['waterlevel'])) {
    $waterlevel = $conn->real_escape_string($_GET['waterlevel']);
    $waterlevelSql = "INSERT INTO waterlevel (level_readings) VALUES ('$waterlevel')";
    if ($conn->query($waterlevelSql) === TRUE) {
        $response["status"] = "success";
        $response["message"] = "Waterlevel data inserted successfully!";
    } else {
        $response["status"] = "error";
        $response["message"] = "Error inserting waterlevel data: " . $conn->error;
    }
}
if (isset($_GET['acidity'])) {
    $acidity = $conn->real_escape_string($_GET['acidity']);
    $aciditySql = "INSERT INTO acidity (acid_readings) VALUES ('$acidity')";
    if ($conn->query($aciditySql) === TRUE) {
        $response["status"] = "success";
        $response["message"] = "Acidity data inserted successfully!";
    } else {
        $response["status"] = "error";
        $response["message"] = "Error inserting Acidity data: " . $conn->error;
    }
}
if (isset($_GET['tds'])) {
    $tds = $conn->real_escape_string($_GET['tds']);
    $tdsSql = "INSERT INTO total_dissolved_solids (tds_readings) VALUES ('$tds')";
    if ($conn->query($tdsSql) === TRUE) {
        $response["status"] = "success";
        $response["message"] = "tds data inserted successfully!";
    } else {
        $response["status"] = "error";
        $response["message"] = "Error inserting tds data: " . $conn->error;
    }
}
if (isset($_GET['temperature'])) {
    $temp = $conn->real_escape_string($_GET['temperature']);
    $tempSql = "INSERT INTO temperature (temp_readings) VALUES ('$temp')";
    if ($conn->query($tempSql) === TRUE) {
        $response["status"] = "success";
        $response["message"] = "Temperature data inserted successfully!";
    } else {
        $response["status"] = "error";
        $response["message"] = "Error inserting Temperature data: " . $conn->error;
    }
    
}

echo json_encode($response);
?>
