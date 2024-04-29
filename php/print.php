<?php

$conn = new mysqli("localhost", "root", "", "hydro");

if (!$conn) {
    echo "Connection Failed";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["startDate"]) && isset($_POST["endDate"])) {
        $startDate = $_POST["startDate"];
        $endDate = $_POST["endDate"];
    } else {
        echo "Error: Start date or end date not provided.";
    }
} else {
    echo "Error: This page is not accessible directly.";
}


$fdte = date("F j, Y - h:i A", strtotime($startDate));
$fdtr = date("F j, Y - h:i A", strtotime($endDate));
$query_high_temp = "SELECT * FROM combined_readings_view 
                            WHERE sensor_name = 'Temperature' 
                            AND reading_cdate BETWEEN '$startDate' AND '$endDate'
                            ORDER BY reading_value DESC 
                            LIMIT 1";
$result_high_temp = mysqli_query($conn, $query_high_temp);

if ($result_high_temp && mysqli_num_rows($result_high_temp) > 0) {
    $row_high_temp = mysqli_fetch_assoc($result_high_temp);
    $highest_temperature = $row_high_temp['reading_value'];
    $highest_temperature_date = $row_high_temp['reading_cdate'];
    
    $ph_readings = "";

    $query_other_readings = "SELECT * FROM acidity WHERE acid_cdate LIKE '$highest_temperature_date%'";
    $result_other_readings = mysqli_query($conn, $query_other_readings);

    if ($result_other_readings && mysqli_num_rows($result_other_readings) > 0) {
        while ($row_other = mysqli_fetch_assoc($result_other_readings)) {
            $ph_readings = $row_other['acid_readings']; 
        }
    } else {
        $ph_readings = "No other sensor readings found for the same date.";
    } 

    $tds_readings = "";
    $tq = "SELECT * FROM total_dissolved_solids WHERE tds_cdate LIKE '$highest_temperature_date%'";
    $rtq = mysqli_query($conn, $tq);
    if ($rtq && mysqli_num_rows($rtq) > 0) {
      while ($row_tds = mysqli_fetch_assoc($rtq)) {
          $tds_readings = $row_tds['tds_readings']; 
      }
    } else {
        $tds_readings = "No other sensor readings found for the same date.";
    } 

    $f_readings = "";
    $fq = "SELECT * FROM waterflow WHERE flow_cdate LIKE '$highest_temperature_date%'";
    $rfq = mysqli_query($conn, $fq);
    if ($rfq && mysqli_num_rows($rfq) > 0) {
      while ($row_f = mysqli_fetch_assoc($rfq)) {
          $f_readings = $row_f['flow_readings']; 
      }
    } else {
        $f_readings = "No other sensor readings found for the same date.";
    } 
    $l_readings = "";
    $lq = "SELECT * FROM waterlevel WHERE level_cdate LIKE '$highest_temperature_date%'";
    $rlq = mysqli_query($conn, $lq);
    if ($rlq && mysqli_num_rows($rlq) > 0) {
      while ($row_l = mysqli_fetch_assoc($rlq)) {
          $l_readings = $row_l['level_readings']; 
      }
    } else {
        $l_readings = "No other sensor readings found for the same date.";
    } 

} else {

    header('Location: report.php?message=NoTemperatureReadings');
    exit(); 
}

$query_low_temp = "SELECT * FROM combined_readings_view WHERE sensor_name = 'Temperature' ORDER BY reading_value ASC LIMIT 1";
$result_low_temp = mysqli_query($conn, $query_low_temp);
if ($result_low_temp && mysqli_num_rows($result_low_temp) > 0) {
    $row_low_temp = mysqli_fetch_assoc($result_low_temp);
    $lowest_temperature = $row_low_temp['reading_value'];
    $lowest_temperature_date = $row_low_temp['reading_cdate'];
    
    $low_ph_readings = "";

    $lph = "SELECT * FROM acidity WHERE acid_cdate LIKE '$lowest_temperature_date%'";
    $result_low_readings = mysqli_query($conn, $lph);

    if ($result_low_readings && mysqli_num_rows($result_low_readings) > 0) {
        while ($row_low_ph = mysqli_fetch_assoc($result_low_readings)) {
            $low_ph_readings = $row_low_ph['acid_readings']; 
        }
    } else {
        $low_ph_readings = "No other sensor readings found for the same date.";
    }

    $low_tds_readings = "";

    $ltds = "SELECT * FROM total_dissolved_solids WHERE tds_cdate LIKE '$lowest_temperature_date%'";
    $rtds = mysqli_query($conn, $ltds);

    if ($rtds && mysqli_num_rows($rtds) > 0) {
        while ($row_low_tds = mysqli_fetch_assoc($rtds)) {
            $low_tds_readings = $row_low_tds['tds_readings']; 
        }
    } else {
        $low_tds_readings = "No other sensor readings found for the same date.";
    }

    $low_flow_readings = "";

    $ftds = "SELECT * FROM waterflow WHERE flow_cdate LIKE '$lowest_temperature_date%'";
    $ftds = mysqli_query($conn, $ftds);

    if ($ftds && mysqli_num_rows($ftds) > 0) {
        while ($row_low_flow = mysqli_fetch_assoc($ftds)) {
            $low_flow_readings = $row_low_flow['flow_readings']; 
        }
    } else {
        $low_flow_readings = "No other sensor readings found for the same date.";
    }
    
    $low_level_readings = "";

    $ltds = "SELECT * FROM waterlevel WHERE level_cdate LIKE '$lowest_temperature_date%'";
    $ltds = mysqli_query($conn, $ltds);

    if ($ltds && mysqli_num_rows($ltds) > 0) {
        while ($row_level_flow = mysqli_fetch_assoc($ltds)) {
            $low_level_readings = $row_level_flow['level_readings']; 
        }
    } else {
        $low_level_readings = "No other sensor readings found for the same date.";
    }

} else{
  echo "No temperature readings available.";
}

$query_a_temp = "SELECT AVG(temp_readings) AS average_temp FROM temperature";
$result_a_temp = mysqli_query($conn, $query_a_temp);
$a_temp = "";
if ($result_a_temp && mysqli_num_rows($result_a_temp) > 0) {
    $arow = mysqli_fetch_assoc($result_a_temp);
    $a_temp = $arow['average_temp'];
} else {
    echo "No data";
}

$query_a_ph = "SELECT AVG(acid_readings) AS average_acid FROM acidity";
$result_a_ph = mysqli_query($conn, $query_a_ph);
$a_ph = "";
if ($result_a_ph && mysqli_num_rows($result_a_ph) > 0) {
    $phrow = mysqli_fetch_assoc($result_a_ph);
    $a_ph = $phrow['average_acid'];
} else {
    echo "No data";
}

$query_tds_ph = "SELECT AVG(tds_readings) AS average_tds FROM total_dissolved_solids";
$result_tds_ph = mysqli_query($conn, $query_tds_ph);
$tds_ph = "";
if ($result_tds_ph && mysqli_num_rows($result_tds_ph) > 0) {
    $tdsrow = mysqli_fetch_assoc($result_tds_ph);
    $tds_ph = $tdsrow['average_tds'];
} else {
    echo "No data";
}

$query_f_ph = "SELECT AVG(flow_readings) AS average_flow FROM waterflow";
$result_f_ph = mysqli_query($conn, $query_f_ph);
$f_ph = "";
if ($result_f_ph && mysqli_num_rows($result_f_ph) > 0) {
    $frow = mysqli_fetch_assoc($result_f_ph);
    $f_ph = $frow['average_flow'];
} else {
    echo "No data";
}

$query_l_ph = "SELECT AVG(level_readings) AS average_level FROM waterlevel";
$result_l_ph = mysqli_query($conn, $query_l_ph);
$l_ph = "";
if ($result_f_ph && mysqli_num_rows($result_f_ph) > 0) {
    $lrow = mysqli_fetch_assoc($result_l_ph);
    $l_ph = $lrow['average_level'];
} else {
    echo "No data";
}
//==================================================================================================

// $query_acid_readings = "SELECT * FROM acidity WHERE acid_cdate BETWEEN '$startDate' AND '$endDate'";
// $result_acid_readings = mysqli_query($conn, $query_acid_readings);

// if ($result_acid_readings && mysqli_num_rows($result_acid_readings) > 0) {
//     while ($row_acid = mysqli_fetch_assoc($result_acid_readings)) {
//         $acid_reading = $row_acid['acid_readings'];
//     }
// } else {
//     echo "No acidity readings found within the specified date range.";
// }

// ?>



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
</head>
<body>
                  <h3 class="text-center mt-5">Republic of the Philippines</h3>
                  <h5 class="text-center mt-2">NFT Hydroponics System</h5>
                  <div class="d-flex justify-content-center">
                    <div class="mx-auto">
                      <img src="../assets/img/backgrounds/hydroponicslogo.jpeg" alt="Description of the image" width="100" height="100">
                    </div>
                  </div>
                  <h1 class="text-center mt-2 mb-5">Overall Water Quality Report</h1>
                  <p class="text-center"><?php echo "$fdte";?> to <?php echo "$fdtr";?></p>
                  <div class="row mt-5">
                    <div class="col">
                        <h3><strong>Temperature Report</strong></h3>
                        <p>Highest Temperature: <?php echo $highest_temperature;?>°C</p>
                        <p>Lowest temperature: <?php echo $lowest_temperature;?>°C</p>
                        <p>Average temperature: <?php echo $a_temp; ?>°C</p>
                    </div>
                    <div class="col">
                        <h3><strong>Acidity Report</strong></h3>
                        <p>Acidity at Highest Temperature: pH of <?php echo $ph_readings;?></p>
                        <p>Acidity at Lowest temperature: pH of <?php echo $low_ph_readings?></p>
                        <p>Average Acidity: pH of <?php echo $a_ph;?></p>
                    </div>
                    <div class="col">
                        <h3><strong>Total Dissolved Solids Report</strong></h3>
                        <p>TDS at Highest Temperature: <?php echo $tds_readings;?> ppm</p>
                        <p>TDS at Lowest temperature: <?php echo $low_tds_readings;?> ppm</p>
                        <p>Average Total Dissolved Solids: <?php echo $tds_ph;?> ppm</p>
                    </div>
                  </div>
                  <div class="row mt-5">
                    <div class="col">
                        <h3><strong>Water Flow Report</strong></h3>
                        <p>Waterflow at Highest Temperature: <?php echo $f_readings;?> L/m</p>
                        <p>Waterflow at Lowest temperature: <?php echo $low_flow_readings;?> L/m</p>
                        <p>Average Waterflow: <?php echo $f_ph; ?> L/m</p>
                    </div>
                    <div class="col mb-5">
                        <h3><strong>Water Level Report</strong></h3>
                        <p>Highest Water Level at Highest Temperature: <?php echo $l_readings;?> m</p>
                        <p>Lowest Water Level at Highest Temperature: <?php echo $low_level_readings;?> m</p>
                        <p>Average Water Level at Highest Temperature: <?php echo $l_ph; ?> m</p>
                    </div>
                  </div>
                  <div style="margin: 500px"></div>
                  <h3><strong>Table of Readings</strong></h3>
                  (<?php echo "$fdte";?> to <?php echo "$fdtr";?>)
                  <div style="margin: 30px"></div>
                  <table class="table card-table">
                        <thead>
                            <tr>
                                <th>Date & Time</th>
                                <th>Acidity</th>
                                <th>Temperature</th>
                                <th>TDS</th>
                                <th>Flow</th>
                                <th>Level</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            <?php
                            $query_acid_readings = "SELECT * FROM acidity WHERE acid_cdate BETWEEN '$startDate' AND '$endDate'";
                            $result_acid_readings = mysqli_query($conn, $query_acid_readings);

                            $query_temp_readings = "SELECT * FROM temperature WHERE temp_cdate BETWEEN '$startDate' AND '$endDate'";
                            $result_temp_readings = mysqli_query($conn, $query_temp_readings);

                            $query_flow_readings = "SELECT * FROM waterflow WHERE flow_cdate BETWEEN '$startDate' AND '$endDate'";
                            $result_flow_readings = mysqli_query($conn, $query_flow_readings);

                            $query_level_readings = "SELECT * FROM waterlevel WHERE level_cdate BETWEEN '$startDate' AND '$endDate'";
                            $result_level_readings = mysqli_query($conn, $query_level_readings);

                            $query_tds_readings = "SELECT * FROM total_dissolved_solids WHERE tds_cdate BETWEEN '$startDate' AND '$endDate'";
                            $result_tds_readings = mysqli_query($conn, $query_tds_readings);

                            if ($result_acid_readings && mysqli_num_rows($result_acid_readings) > 0) {
                                while ($row_acid = mysqli_fetch_assoc($result_acid_readings)) {
                                    $acid_reading = $row_acid['acid_readings'];

                                    $acid_date_timer = $row_acid['acid_cdate'];

                                    $dater = new DateTime($acid_date_timer);
                                    $formatted_dater = $dater->format('F j, Y-g:i A');

                                    $temp_row = mysqli_fetch_assoc($result_temp_readings);
                                    $temp_reading = $temp_row ? $temp_row['temp_readings'] : '';

                                    $flow_row = mysqli_fetch_assoc($result_flow_readings);
                                    $flow_reading = $flow_row ? $flow_row['flow_readings'] : '';

                                    $level_row = mysqli_fetch_assoc($result_level_readings);
                                    $level_reading = $level_row ? $level_row['level_readings'] : '';

                                    $tds_row = mysqli_fetch_assoc($result_tds_readings);
                                    $tds_reading = $tds_row ? $tds_row['tds_readings'] : '';

                                    echo "<tr>";
                                    echo "<td>$formatted_dater</td>";
                                    echo "<td>pH of $acid_reading</td>";
                                    echo "<td>$temp_reading °C</td>";
                                    echo "<td>$tds_reading ppm</td>";
                                    echo "<td>$flow_reading L/m</td>";
                                    echo "<td>$level_reading m</td>";
                                    echo "</tr>";
                                }
                            } else {
                                echo "<tr><td colspan='6'>No data found within the specified date range.</td></tr>";
                            }
                            ?>
                        </tbody>
                  </table>

    <script>
        window.onload = function() {
            window.print();
        };
    </script>
</body>
</html>
