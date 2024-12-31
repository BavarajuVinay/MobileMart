<?php
// Assuming your database connection is established already

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $email = $_POST['e1'];
    $password = $_POST['p1']; // Assuming the new password is in p1 field

    $servername = "localhost";
    $db_username = "root";
    $db_password = "";
    $dbname = "mydb";

    // Validate email and password fields (you may add more validation)
    if (empty($email) || empty($password)) {
        // Handle empty fields
        header("Location: forgotpass.html");
    } else {
        // Hash the password for security
        // $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Create connection
        $conn = new mysqli($servername, $db_username, $db_password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Prepare SQL statement to update the password in the database
        $sql = "UPDATE signup SET pass = ? WHERE email = ?";
        $stmt = $conn->prepare($sql);

        // Bind parameters and execute the statement
        $stmt->bind_param("ss", $password, $email);
        if ($stmt->execute()) {
            // Password updated successfully
            header("location: login.html");
        } else {
            // Error occurred while updating the password
            echo "Error updating password: " . $conn->error;
        }

        // Close statement and database connection
        $stmt->close();
        $conn->close();
    }
}
?>
