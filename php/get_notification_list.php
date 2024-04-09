<?php
include "../data_con.php";

$sql = "SELECT * FROM notifications WHERE status='0' ORDER BY id DESC";
$res = mysqli_query($conn, $sql);

if (mysqli_num_rows($res) > 0) {
    foreach ($res as $item) {
        $formatted_date = date("F-d-Y h:i A", strtotime($item["cdate"]));
        echo '<li>';
        echo '<span style="color: red;">Critical ' . $item["notif_sname"] . '! <span style="color: blue;">Reading:</span> ' . $item["readings"] . '</span>';
        echo $formatted_date;
        echo '<hr>';
        echo '</li>';
    }
} else {
    echo '<li><i class="fa-sharp fa-solid fa-circle-exclamation fa-sm"></i> no notifications</li>';
}

mysqli_close($conn);
?>
