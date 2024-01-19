<?php
$mysqli = new mysqli('localhost', 'CatDBuser', 'CatDBpassword', 'psj');

if (isset($_GET['timeslot'])) {
    $timeslot = $_GET['timeslot'];
    $stmt = $mysqli->prepare("SELECT available_slots FROM psj_booking WHERE timeslot = ?");
    $stmt->bind_param('s', $timeslot);
    $stmt->execute();
    $stmt->bind_result($availableSlots);
    $stmt->fetch();
    $stmt->close();

    echo $availableSlots;
} else {
    echo "Invalid request";
}
?>
