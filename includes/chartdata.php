<?php
    $fchartquery = "SELECT * FROM waterflow ORDER BY flow_cdate DESC";
    $fchartresult = mysqli_query($conn, $fchartquery);
    while ($row = mysqli_fetch_assoc($fchartresult)) {
        $data_fchart[] = $row;
    }
    
    $lchartquery = "SELECT * FROM waterlevel ORDER BY level_cdate DESC";
    $lchartresult = mysqli_query($conn, $lchartquery);
    while ($row = mysqli_fetch_assoc($lchartresult)) {
        $data_lchart[] = $row;
    }

    $achartquery = "SELECT * FROM acidity ORDER BY acid_cdate DESC";
    $achartresult = mysqli_query($conn, $achartquery);
    while ($row = mysqli_fetch_assoc($achartresult)) {
        $data_achart[] = $row;
    }
    
    $tchartquery = "SELECT * FROM total_dissolved_solids ORDER BY tds_cdate DESC";
    $tchartresult = mysqli_query($conn, $tchartquery);
    while ($row = mysqli_fetch_assoc($tchartresult)) {
        $data_tchart[] = $row;
    }
?>