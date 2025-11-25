<?php
$file = 'appointments.json';

$service = $_POST['service'];
$date = $_POST['date'];
$time = $_POST['time'];

$newAppointment = [
    "id" => uniqid(),
    "service" => $service,
    "date" => $date,
    "time" => $time,
    "status" => "Booked"
];

// Load existing appointments
if(file_exists($file)) {
    $data = json_decode(file_get_contents($file), true);
} else {
    $data = [];
}

$data[] = $newAppointment;

// Save back
file_put_contents($file, json_encode($data, JSON_PRETTY_PRINT));

echo "Appointment booked successfully for $service on $date at $time.";
?>
