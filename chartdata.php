<?php
$conn = new mysqli("localhost", "root", "", "hydro");

if (!$conn) {
    echo "Connection Failed";
}

$query = "SELECT * FROM temperature ORDER BY temp_cdate DESC";
$result = mysqli_query($conn, $query);

$chartdata_temp = [];
$chartdate_temp = [];

while ($row = mysqli_fetch_assoc($result)) {
    $chartdata_temp[] = $row['temp_readings'];
    $chartdate_temp[] = $row['temp_cdate'];
}


?>
