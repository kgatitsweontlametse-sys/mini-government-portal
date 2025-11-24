<?php
include 'db.php';

$result = $conn->query("SELECT * FROM requests ORDER BY id DESC");
$requests = [];

while ($row = $result->fetch_assoc()) {
    $requests[] = $row;
}

echo json_encode($requests);
?>
