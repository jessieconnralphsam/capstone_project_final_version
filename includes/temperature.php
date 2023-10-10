<?php

  include "../data_con.php";

  $tempquery = "SELECT * FROM temperature ORDER BY temp_cdate DESC LIMIT 2";
  $tempresult = mysqli_query($conn, $tempquery);
  
  $data_temp = array();
  while ($row = mysqli_fetch_assoc($tempresult)) {
      $data_temp[] = $row['temp_readings'];
      $date_temp[] = $row['temp_cdate'];
  }

  mysqli_close($conn);

  $tempvalue = $data_temp[0];
  $tempcdate = date("F j - g:i A", strtotime($date_temp[0]));
  $tempvalue_prev =  $data_temp[1];
  $tempvalue_comp = $data_temp[0] - $data_temp[1];
  
  if ($tempvalue_comp < 0) {
    $tempclass = 'text-danger';
    $tempicon = 'bx bx-chevron-down';
  } else {
    $tempclass = 'text-success';
    $tempicon = 'bx bx-chevron-up';
  }

  $response = array(
      'tempvalue' => $tempvalue,
      'tempicon' => $tempicon,
      'tempclass' => $tempclass,
      'tempvalue_comp' => $tempvalue_comp,
      'tempcdate' => $tempcdate
  );

  header('Content-Type: application/json');
  echo json_encode($response);
?>
