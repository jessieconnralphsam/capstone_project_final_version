<?php

  include "../data_con.php";

  $tdsquery = "SELECT * FROM total_dissolved_solids ORDER BY tds_cdate DESC LIMIT 2";
  $tdsresult = mysqli_query($conn, $tdsquery);
  
  $data_tds = array();
  while ($row = mysqli_fetch_assoc($tdsresult)) {
      $data_tds[] = $row['tds_readings'];
  }

  mysqli_close($conn);

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

  $response = array(
      'tdsvalue' => $tdsvalue,
      'tdsicon' => $tdsicon,
      'tdsclass' => $tdsclass,
      'tdsvalue_comp' => $tdsvalue_comp
  );

  header('Content-Type: application/json');
  echo json_encode($response);
?>
