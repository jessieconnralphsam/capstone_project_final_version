<?php

$conn = new mysqli("localhost", "root", "", "hydro");

if (!$conn) {
    echo "Connection Failed";
}

$query_high_temp = "SELECT * FROM combined_readings_view WHERE sensor_name = 'Temperature' ORDER BY reading_value DESC LIMIT 1";
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
            $ph_readings = $row_other['acid_readings'] . "<br>"; 
        }
    } else {
        $ph_readings = "No other sensor readings found for the same date.";
    } 

    $tds_readings = "";
    $tq = "SELECT * FROM total_dissolved_solids WHERE tds_cdate LIKE '$highest_temperature_date%'";
    $rtq = mysqli_query($conn, $tq);
    if ($rtq && mysqli_num_rows($rtq) > 0) {
      while ($row_tds = mysqli_fetch_assoc($rtq)) {
          $tds_readings = $row_tds['tds_readings'] . "<br>"; 
      }
    } else {
        $tds_readings = "No other sensor readings found for the same date.";
    } 
} else {
    echo "No temperature readings found.";
}

?>

                  <h3 class="text-center mt-5">Republic of the Philippines</h3>
                  <h5 class="text-center mt-2">NFT Hydroponics System</h5>
                  <div class="d-flex justify-content-center">
                    <div class="mx-auto">
                      <img src="../assets/img/backgrounds/hydroponicslogo.jpeg" alt="Description of the image" width="100" height="100">
                    </div>
                  </div>
                  <h1 class="text-center mt-2 mb-5">Overall Water Quality Report</h1>
                  <h2 class="text-success"><?php echo  $month_format; ?></h2>
                  <div class="row mt-5">
                    <div class="col">
                        <h3><strong>Temperature Report</strong></h3>
                        <p>Highest Temperature: <?php echo $highest_temperature;?></p>
                        <p>Lowest temperature: </p>
                        <p>Average temperature:</p>
                    </div>
                    <div class="col">
                        <h3><strong>Acidity Report</strong></h3>
                        <p>Acidity at Highest Temperature: <?php echo $ph_readings;?></p>
                        <p>Acidity at Lowest temperature: </p>
                        <p>Average Acidity:</p>
                    </div>
                    <div class="col">
                        <h3><strong>Total Dissolved Solids Report</strong></h3>
                        <p>TDS at Highest Temperature: <?php echo $tds_readings;?></p>
                        <p>TDS at Lowest temperature: </p>
                        <p>Average Total Dissolved Solids:</p>
                    </div>
                  </div>
                  <div class="row mt-5">
                    <div class="col">
                        <h3><strong>Water Flow Report</strong></h3>
                        <p>Waterflow at Highest Temperature: </p>
                        <p>Waterflow at Lowest temperature: </p>
                        <p>Average Waterflow:</p>
                    </div>
                    <div class="col mb-5">
                        <h3><strong>Water Level Report</strong></h3>
                        <p>Highest Water Level at Highest Temperature: </p>
                        <p>Lowest Water Level at Highest Temperature:</p>
                        <p>Average Water Level at Highest Temperature:</p>
                    </div>
                  </div>
                  <h3><strong>Overall Water Quality Monitoring Table of <span class="text-success"><?php echo  $month_format; ?></span></strong></h3>
                  <table class="table card-table">
                      <thead>
                        <tr>
                          <th>Date & Time</th>
                          <th>Acidity</th>
                          <th>TDS</th>
                          <th>Temp</th>
                          <th>Waterflow</th>
                          <th>Waterlevel</th>
                          <th>Average</th>
                          <th>Status</th>
                          <th>Actions for acidity</th>
                          <th>Actions for tds</th>
                        </tr>
                      </thead>
                      <tbody class="table-border-bottom-0">

                        <?php                   
                        foreach ($temperaturedate as $index =>  $date) {
                            echo '<tr>';
                            echo '<td><i class="text-danger"></i> <strong>' .  $month_format . '</strong></td>';
                            echo '<td> pH of ' . $data_acid[$index] . '</td>';
                            echo '<td>' . $data_tds[$index] . 'ppm</td>';
                            echo '<td>' . $data_temp[$index] . '°C</td>';
                            echo '<td>' . $data_flow[$index] . ' L/m</td>';
                            echo '<td>' . $data_level[$index] . 'm</td>';
                            echo '<td>' . round($averages[$index]['average']) . '%</td>';
                            echo '<td><span class="badge bg-label-primary me-1">' . $averages[$index]['label'] . '</span></td>';
                            echo '<td>' . $data_acid_action[$index].'</td>';
                            echo '<td>' . $data_tds_action[$index].'</td>';
                            echo '</tr>';
                        }
                        ?>
                      </tbody>
                  </table>
                  <div style="margin: 700px;"></div>
                  <h2 class="text-success"><?php echo $year; ?></h2>
                  <div class="row mt-5">
                    <div class="col">
                        <h3><strong>Temperature Report</strong></h3>
                        <p>Highest Temperature: </p>
                        <p>Lowest temperature: </p>
                        <p>Average temperature:</p>
                    </div>
                    <div class="col">
                        <h3><strong>Acidity Report</strong></h3>
                        <p>Acidity at Highest Temperature: </p>
                        <p>Acidity at Lowest temperature: </p>
                        <p>Average Acidity:</p>
                    </div>
                    <div class="col">
                        <h3><strong>Total Dissolved Solids Report</strong></h3>
                        <p>TDS at Highest Temperature: </p>
                        <p>TDS at Lowest temperature: </p>
                        <p>Average Total Dissolved Solids:</p>
                    </div>
                  </div>
                  <div class="row mt-5">
                    <div class="col">
                        <h3><strong>Water Flow Report</strong></h3>
                        <p>Waterflow at Highest Temperature: </p>
                        <p>Waterflow at Lowest temperature: </p>
                        <p>Average Waterflow:</p>
                    </div>
                    <div class="col mb-5">
                        <h3><strong>Water Level Report</strong></h3>
                        <p>Highest Water Level: </p>
                        <p>Lowest Water Level: </p>
                        <p>Average Water Level:</p>
                    </div>
                  </div>
                  <table class="table card-table">
                      <thead>
                        <tr>
                          <th>Date & Time</th>
                          <th>Acidity</th>
                          <th>TDS</th>
                          <th>Temp</th>
                          <th>Waterflow</th>
                          <th>Waterlevel</th>
                          <th>Average</th>
                          <th>Status</th>
                          <th>Actions for acidity</th>
                          <th>Actions for tds</th>
                        </tr>
                      </thead>
                      <tbody class="table-border-bottom-0">

                        <?php                   
                        foreach ($temperaturedate as $index =>  $date) {
                            echo '<tr>';
                            echo '<td><i class="text-danger"></i> <strong>' .  $year . '</strong></td>';
                            echo '<td> pH of ' . $data_acid[$index] . '</td>';
                            echo '<td>' . $data_tds[$index] . 'ppm</td>';
                            echo '<td>' . $data_temp[$index] . '°C</td>';
                            echo '<td>' . $data_flow[$index] . ' L/m</td>';
                            echo '<td>' . $data_level[$index] . 'm</td>';
                            echo '<td>' . round($averages[$index]['average']) . '%</td>';
                            echo '<td><span class="badge bg-label-primary me-1">' . $averages[$index]['label'] . '</span></td>';
                            echo '<td>' . $data_acid_action[$index].'</td>';
                            echo '<td>' . $data_tds_action[$index].'</td>';
                            echo '</tr>';
                        }
                        ?>
                      </tbody>
                  </table>