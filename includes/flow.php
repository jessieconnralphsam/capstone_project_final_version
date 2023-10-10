<?php

  include "../data_con.php";

  $flowquery = "SELECT * FROM waterflow ORDER BY flow_cdate DESC LIMIT 2";
  $flowresult = mysqli_query($conn, $flowquery);
  
  $data_flow = array();
  while ($row = mysqli_fetch_assoc($flowresult)) {
      $data_flow[] = $row['flow_readings'];
  }

  mysqli_close($conn);

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

  $response = array(
      'flowvalue' => $flowvalue,
      'icon' => $icon,
      'class' => $class,
      'flowvalue_comp' => $flowvalue_comp
  );

  header('Content-Type: application/json');
  echo json_encode($response);
?>
