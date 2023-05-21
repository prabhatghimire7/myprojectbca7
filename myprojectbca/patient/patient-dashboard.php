<?php
include '../connection.php';

session_start();

// Check if the user is not logged in
if (!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn'] !== true) {
    // Redirect to the login page
    header('Location: ../login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Dashboard</title>
</head>
<body>
    <?php
$p_id = $_GET['id']; // Assuming the ID is passed as a parameter
$sql = "SELECT name FROM patients WHERE id = $p_id";

// Execute the query
$result = $conn->query($sql);

// Check if the query was successful
if ($result) {
    // Fetch the result row
    $row = $result->fetch_assoc();
    $full_name = $row['full_name'];

    // Display the patient name
    echo "Patient Name: " . $full_name;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
  ?>
    <a href="patient-logout.php">Click me to logout</a>
</body>
</html>
