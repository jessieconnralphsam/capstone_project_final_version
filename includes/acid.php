<?php

  include "../data_con.php";

  $acidquery = "SELECT * FROM acidity ORDER BY acid_cdate DESC LIMIT 2";
  $acidresult = mysqli_query($conn, $acidquery);
  
  $data_acid = array();
  while ($row = mysqli_fetch_assoc($acidresult)) {
      $data_acid[] = $row['acid_readings'];
  }

  mysqli_close($conn);

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

  $response = array(
      'acidvalue' => $acidvalue,
      'acidicon' => $acidicon,
      'acidclass' => $acidclass,
      'acidvalue_comp' => $acidvalue_comp
  );

  header('Content-Type: application/json');
  echo json_encode($response);
?>
