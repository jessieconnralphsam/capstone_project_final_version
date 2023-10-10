<?php

  include "../data_con.php";

  $levelquery = "SELECT * FROM waterlevel ORDER BY level_cdate DESC LIMIT 2";
  $levelresult = mysqli_query($conn, $levelquery);
  
  $data_level = array();
  while ($row = mysqli_fetch_assoc($levelresult)) {
      $data_level[] = $row['level_readings'];
  }

  mysqli_close($conn);

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

  $response = array(
      'levelvalue' => $levelvalue,
      'levelicon' => $levelicon,
      'levelclass' => $levelclass,
      'levelvalue_comp' => $levelvalue_comp
  );

  header('Content-Type: application/json');
  echo json_encode($response);
?>
