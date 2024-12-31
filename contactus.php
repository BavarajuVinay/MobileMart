<?php

session_start();

// Check if the user is logged in
if (!isset($_SESSION['email'])) {
    echo "<script>alert('Please login to contact us');</script>";
    include "login.html";
} else {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_SESSION['email'];
    $mobile = $_POST['ph1'];
    $message = $_POST['msg1'];

    // Connect to the database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mydb";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Prepare and execute SQL statement
    $stmt = $conn->prepare("INSERT INTO contact(name, email, mobile, message) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $mobile, $message);

    if ($stmt->execute()) {
        echo "<script>alert('We received your feedback. Thank you for contacting us.');</script>";
        include "home.php";
    } else {
        echo "<script>alert('Sorry! Some error occurred. Please try again.');</script>";
        include "contact.php";
    }

    $stmt->close();
    $conn->close();
}
?>
