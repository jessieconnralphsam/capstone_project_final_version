<?php
include "../data_con.php";
$sql = "SELECT COUNT(*) AS notification_count FROM notifications WHERE status='0'";
$result = mysqli_query($conn, $sql);
if ($result) {
    $row = mysqli_fetch_assoc($result);
    echo $row['notification_count'];
} else {
    echo "Error fetching notification count";
}
mysqli_close($conn);
?>
