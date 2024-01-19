<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] ?? '' == "GET" && isset($_GET['timeslot']) && isset($_GET['mykad'])) {
    $mykad = $_GET['mykad'];
    $time_slot = $_GET['timeslot'];

    if (!empty($mykad)) {
        $mysqli = new mysqli('localhost', 'CatDBuser', 'CatDBpassword', 'psj');

        $checkStmt = $mysqli->prepare("SELECT available_slots FROM psj_timeslot WHERE timeslot = ?");
        $checkStmt->bind_param('s', $time_slot);
        $checkStmt->execute();
        $checkStmt->bind_result($availableSlots);
        $checkStmt->fetch();
        $checkStmt->close();

        if ($availableSlots > 0) {
            $updateStmt = $mysqli->prepare("UPDATE psj_timeslot SET available_slots = available_slots - 1 WHERE timeslot = ?");
            $updateStmt->bind_param('s', $time_slot);
            $updateStmt->execute();
            $updateStmt->close();

            $insertStmt = $mysqli->prepare("INSERT INTO psj_booking(User_ID, timeslot) VALUES (?, ?)");
            if ($insertStmt) {
                $insertStmt->bind_param('ss', $mykad, $time_slot);
                $insertStmt->execute();

                if ($insertStmt->affected_rows > 0) {
                    echo "success";
                } else {
                    echo "Error: Unable to insert data into the database.";
                }

                $insertStmt->close();
            } else {
                echo "Error: Unable to prepare the database statement.";
            }
        } else {
            echo "No available slots for this timeslot.";
        }

        $mysqli->close();
        exit();
    } else {
        header("Location: index.php");
        exit();
    }
} else {
    header("Location: default_page.php");
    exit();
}
?>
