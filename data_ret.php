<?php

  $flowquery = "SELECT * FROM waterflow ORDER BY flow_cdate DESC LIMIT 2";
  $flowresult = mysqli_query($conn, $flowquery);
  while ($row = mysqli_fetch_assoc($flowresult)) {
      $data_flow[] = $row['flow_readings'];
  }

  $levelquery = "SELECT * FROM waterlevel ORDER BY level_cdate DESC LIMIT 2";
  $levelresult = mysqli_query($conn, $levelquery);
  while ($row = mysqli_fetch_assoc($levelresult)) {
      $data_level[] = $row['level_readings'];
  }

  $acidquery = "SELECT * FROM acidity ORDER BY acid_cdate DESC LIMIT 2";
  $acidresult = mysqli_query($conn, $acidquery);
  while ($row = mysqli_fetch_assoc($acidresult)) {
      $data_acid[] = $row['acid_readings'];
  }

  $tdsquery = "SELECT * FROM total_dissolved_solids ORDER BY tds_cdate DESC LIMIT 2";
  $tdsresult = mysqli_query($conn, $tdsquery);
  while ($row = mysqli_fetch_assoc($tdsresult)) {
      $data_tds[] = $row['tds_readings'];
  }

  $tempquery = "SELECT * FROM temperature ORDER BY temp_cdate DESC LIMIT 2";
  $tempresult = mysqli_query($conn, $tempquery);
  while ($row = mysqli_fetch_assoc($tempresult)) {
      $data_temp[] = $row['temp_readings'];
      $date_temp[] = $row['temp_cdate'];
  }
?>

<?php
  $tempvalue = $data_temp[0];
  $tempcdate = date("F j - h:i A", strtotime($date_temp[0]));
  $tempvalue_prev =  $data_temp[1];
  $tempvalue_comp = $data_temp[0] - $data_temp[1];
  
  if ($tempvalue_comp < 0) {
    $tempclass = 'text-danger';
    $tempicon = 'bx bx-chevron-down';
  } else {
    $tempclass = 'text-success';
    $tempicon = 'bx bx-chevron-up';
  }
?>

<?php

$weights_for_acidity= [
  1 => 10,
  2 => 20,
  3 => 30,
  4 => 60,
  5 => 80,
  6 => 90,
  7 => 97,
  8 => 90,
  9 => 80,
  10 => 60,
  11 => 40,
  12 => 30,
  13 => 20,
  14 => 10,
];

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
            $weights_for_label[$i] = 'extremely poor';
    }
}

if ($data_tds[0] <= 50) {
  $tdsdata = 15;
}else if ($data_tds[0] >= 51 && $data_tds <= 100){
  $tdsdata = 25;
}else if ($data_tds[0] >= 101 && $data_tds <= 200){
  $tdsdata = 30;
}else if ($data_tds[0] >= 201 && $data_tds <= 300){
  $tdsdata = 35;
}

if ($data_temp[0] <=25){
  $temperature = 10;
}

$newdata = isset($weights_for_acidity[$data_acid[0]]) ? $weights_for_acidity[$data_acid[0]] : null;
$average = round(($newdata + $tdsdata + $temperature) / 3, 2);
$roundedave = ceil($average);
$newlabel = isset($weights_for_label[$average]) ? $weights_for_label[$average] : null;
?>

<?php
  $flowvalue = $data_flow[0];
  $flowvalue_prev =  $data_flow[1];
  $flowvalue_comp = $data_flow[0] - $data_flow[1];
  
  if ($flowvalue_comp < 0) {
    $class = 'text-danger';
    $icon = 'bx bx-down-arrow-alt';
  } else {
    $class = 'text-success';
    $icon = 'bx bx-up-arrow-alt';
  }
?>

<?php
  $levelvalue = $data_level[0];
  $levelvalue_prev =  $data_level[1];
  $levelvalue_comp = $data_level[0] - $data_level[1];
  
  if ($levelvalue_comp < 0) {
    $levelclass = 'text-danger';
    $levelicon = 'bx bx-down-arrow-alt';
  } else {
    $levelclass = 'text-success';
    $levelicon = 'bx bx-up-arrow-alt';
  }
?>

<?php
  $acidvalue = $data_acid[0];
  $acidvalue_prev =  $data_acid[1];
  $acidvalue_comp = $data_acid[0] - $data_acid[1];
  
  if ($acidvalue_comp < 0) {
    $acidclass = 'text-danger';
    $acidicon = 'bx bx-down-arrow-alt';
  } else {
    $acidclass = 'text-success';
    $acidicon = 'bx bx-up-arrow-alt';
  }
?>

<?php
  $tdsvalue = $data_tds[0];
  $tdsvalue_prev =  $data_tds[1];
  $tdsvalue_comp = $data_tds[0] - $data_tds[1];
  
  if ($tdsvalue_comp < 0) {
    $tdsclass = 'text-danger';
    $tdsicon = 'bx bx-down-arrow-alt';
  } else {
    $tdsclass = 'text-success';
    $tdsicon = 'bx bx-up-arrow-alt';
  }
?>