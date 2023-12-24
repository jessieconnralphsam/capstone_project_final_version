<?php
$conn = new mysqli("localhost", "root", "", "hydro");

if (!$conn) {
    echo "Connection Failed";
}

$query = "SELECT * FROM combined_readings_view ORDER BY reading_cdate DESC";
$result = mysqli_query($conn, $query);

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
    $weightedValue = $row['weighted_value'];

    if (!isset($sums[$date])) {
        $sums[$date] = 0;
        $counts[$date] = 0;
    }

    $sums[$date] += $weightedValue;
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

// echo "Date: " . $averages[0]['date'] . " Reading: " . $averages[0]['average'] . " Label: " . $averages[0]['label'] . '<br>';
// echo "Date: " . $averages[1]['date'] . " Reading: " . $averages[1]['average'] . " Label: " . $averages[1]['label'] . '<br>';
?>
