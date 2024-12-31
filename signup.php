<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["n1"];
    $email = $_POST["e1"];
    $password = $_POST["p1"];
    
    // Database connection parameters
    $servername = "localhost";
    $db_username = "root";
    $db_password = "";
    $dbname = "mydb";

    // Create connection
    $conn = new mysqli($servername, $db_username, $db_password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and bind the query to check if email already exists
    $stmt = $conn->prepare("SELECT * FROM signup WHERE email = ?");
    $stmt->bind_param("s", $email);

    // Execute the query
    $stmt->execute();

    // Get the result
    $result = $stmt->get_result();

    // Check if email already exists
    if ($result->num_rows > 0) {
        // Email already exists, display alert and redirect
        echo '<script>';
        echo 'alert("User with this email already exists!");';
        echo 'window.location.href = "signup.html";';
        echo '</script>';
        exit();
    }

    // Close the statement
    $stmt->close();

    // Prepare and bind the insertion query
    $stmt = $conn->prepare("INSERT INTO signup (name, email, pass) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $password);

    // Execute the query
    if ($stmt->execute()) {
        // Record inserted successfully
        header("Location: login.html");
        exit();
    } else {
        // Error occurred while inserting record
        echo "Error: " . $stmt->error;
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
}
?>
