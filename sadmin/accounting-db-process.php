<?php
@include '../database.php';

$sql = "SELECT * FROM accounting";
$result = $conn->query($sql);

if ($result = mysqli_query($conn, $sql)) {
    $customerrowcount = mysqli_num_rows($result);
    echo $customerrowcount;
}

?>