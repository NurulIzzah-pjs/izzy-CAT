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
    $name = $_POST['name'];
    $mykad = $_POST['mykad'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirmpass'];
    $phonenum = $_POST['phonenum'];
    $address = $_POST['address'];
    $dependent = $_POST['dependent'];
    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Prepare SQL statement
    $stmt = $mysqli->prepare("INSERT INTO psj_signup (username, mykad, email, password, phonenum, address, dependent) VALUES (?, ?, ?, ?, ?, ?, ?)");

    // Check if statement preparation succeeded
    if ($stmt === false) {
        die("Error: " . $mysqli->error);
    }

    // Bind parameters
    $stmt->bind_param("sssssss", $name, $mykad, $email, $hashed_password, $phonenum, $address, $dependent);
    // Execute the statement
    if ($stmt->execute()) {
        $_SESSION['mykad'] = $mykad;
        header("Location: DependentPage.php");
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close statement and connection
    $stmt->close();
    $mysqli->close();
}
?>


