<?php
session_start();
// Check for connection errors
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $mysqli = new mysqli('localhost', 'CatDBuser', 'CatDBpassword', 'psj');

    // Check for connection errors
    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }

    // Get POST data
    $mykad = isset($_SESSION['mykad']) ? $_SESSION['mykad'] : '';
    $dependentname = $_POST['dependentname'];
    $dependentmykad = $_POST['dependentmykad'];
    $age = $_POST['age'];
    $relay = $_POST['relay'];



    // Prepare SQL statement
    $stmt = $mysqli->prepare("INSERT INTO  psj_userfamily ( User_IC, Family_Name, Family_IC, Family_Age, Family_Relation) VALUES ( ?, ?, ?, ?, ?)");

    // Check if statement preparation succeeded
    if ($stmt === false) {
        die("Error: " . $mysqli->error);
    }

    // Bind parameters
    $stmt->bind_param("sssss", $mykad, $dependentname, $dependentmykad, $age, $relay);

    // Execute the statement
    if ($stmt->execute()) {

    // Close statement and connection
    $stmt->close();
    $mysqli->close();
    echo '<script>';
    echo 'var addAnother = confirm("Dependent added successfully! Do you want to add another Dependent?");';
    echo 'if (addAnother) { window.location.href = "DependentPage.php"; }';
    echo 'else { window.location.href = "DependentPageSuccess.html"; }';
    echo '</script>';
} else {
    echo "Error: " . $stmt->error;
}
}
?>

