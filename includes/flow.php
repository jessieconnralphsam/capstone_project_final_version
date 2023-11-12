<?php
  include "../data_con.php";

  $flowquery = "SELECT * FROM waterflow ORDER BY flow_cdate DESC LIMIT 2";
  $flowresult = mysqli_query($conn, $flowquery);
  
  $data_flow = array();
  while ($row = mysqli_fetch_assoc($flowresult)) {
      $data_flow[] = $row['flow_readings'];
  }

  mysqli_close($conn);

?>
