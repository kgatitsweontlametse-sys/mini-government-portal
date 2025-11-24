<?php
include 'db.php';

$name = $_POST['name'];
$email = $_POST['email'];
$service = $_POST['service'];
$details = $_POST['details'];

$sql = "INSERT INTO requests (name, email, service, details, status) VALUES (?, ?, ?, ?, 'Pending')";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssss", $name, $email, $service, $details);
$stmt->execute();

echo "Request submitted successfully.";
?>
