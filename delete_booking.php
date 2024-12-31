<?php
session_start();

if(isset($_SESSION["username"]) && isset($_GET["id"])) {
    $email = $_SESSION["username"];
    $booking_id = $_GET["id"];

    // Establish database connection
    $conn = mysqli_connect("localhost", "root", "", "mydb");
    if(!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Prepare SQL query to delete the booking
    $sql = "DELETE FROM bookings WHERE name='$email' AND id=$booking_id";

    // Execute the query
    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Booking deleted successfully!');</script>";
        // Redirect to the page where bookings are displayed
        header("Location: bookings.php");
        exit();
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);
} else {
    // Redirect to login page if user is not logged in or ID is not provided
    header("Location: login.html");
    exit();
}
?>
