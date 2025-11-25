<?php
$idNumber = $_POST['idNumber'];

// Simple demo check
if(strlen($idNumber) == 13) {
    echo "Verification successful for ID: $idNumber";
} else {
    echo "Invalid ID number. Please try again.";
}
?>
