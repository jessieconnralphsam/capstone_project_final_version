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