<?php
// Start session
session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $email = $_POST["e1"];
    $password = $_POST["p1"];

    if ($email == "admin@gmail.com" && $password == "pass") {
        header("Location: adminmain.html");
        exit; // Ensure script stops execution after redirect
    } else {
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

        // Prepare and bind the query
        $stmt = $conn->prepare("SELECT * FROM signup WHERE email = ?");
        $stmt->bind_param("s", $email);

        // Execute the query
        $stmt->execute();

        // Get the result
        $result = $stmt->get_result();

        // Check if user exists
        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            
            // Verify password
            if ($password == $row["pass"]) {
                // Authentication successful, set session variable and redirect to dashboard
                $_SESSION["email"] = $email;
                $_SESSION["username"] = $row["name"];
                header("Location: home.php");
                exit; // Ensure script stops execution after redirect
            } else {
                // Password is incorrect
                echo "<script>alert('Incorrect Password!');window.location.href='login.html'</script>";
                // echo "Incorrect password!";
                // header("Location: login.html");
                exit; // Ensure script stops execution after redirect
            }
        } else {
            // User does not exist
            echo "<script>alert('User Not Found!');window.location.href='login.html'</script>";
        }

        // Close statement and connection
        $stmt->close();
        $conn->close();
    }
}
?>
