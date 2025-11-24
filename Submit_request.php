<?php
// File path for storage
$file = 'requests.json';

// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$service = $_POST['service'];
$details = $_POST['details'];

// Create new request array
$newRequest = [
    "name" => $name,
    "email" => $email,
    "service" => $service,
    "details" => $details,
    "status" => "Pending",
    "timestamp" => date("Y-m-d H:i:s")
];

// Read existing data
if (file_exists($file)) {
    $data = json_decode(file_get_contents($file), true);
} else {
    $data = [];
}

// Add new request
$data[] = $newRequest;

// Save back to file
file_put_contents($file, json_encode($data, JSON_PRETTY_PRINT));

echo "Request submitted successfully!";
?>
