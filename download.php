<?php
$db_connection = new mysqli("localhost", "root", "", "hydro");

if (!$db_connection) {
    echo "Connection Failed";
}

$query = "SELECT * FROM combined_readings_view ORDER BY reading_cdate DESC";
$result = mysqli_query($db_connection, $query);

$sums = array();
$counts = array();
$averages = array();
$weights_for_label = [];

for ($i = 1; $i <= 100; $i++) {
    switch (true) {
        case ($i >= 25 && $i <= 49):
            $weights_for_label[$i] = 'poor';
            break;
        case ($i >= 50 && $i <= 69):
            $weights_for_label[$i] = 'medium';
            break;
        case ($i >= 70 && $i <= 89):
            $weights_for_label[$i] = 'good';
            break;
        case ($i >= 90 && $i <= 100):
            $weights_for_label[$i] = 'excellent';
            break;
        default:
            $weights_for_label[$i] = 'critical';
    }
}

while ($row = mysqli_fetch_assoc($result)) {
    $date = $row['reading_cdate'];
    $weighted_value = $row['weighted_value'];

    if (!isset($sums[$date])) {
        $sums[$date] = 0;
        $counts[$date] = 0;
    }

    $sums[$date] += $weighted_value;
    $counts[$date]++;
}

foreach ($sums as $date => $sum) {
    $count = $counts[$date];
    $average = $sum / $count;

    $label_index = intval($average); 
    $label = $weights_for_label[$label_index];

    $averages[] = array(
        'date' => $date,
        'average' => $average,
        'label' => $label
    );
}

$csvContent = "Date, Average, Label\n";
foreach ($averages as $average) {
    $csvContent .= "{$average['date']},{$average['average']},{$average['label']}\n";
}

header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename="nft_water_condition_averages.csv"');


echo $csvContent;

mysqli_close($db_connection);
?>
