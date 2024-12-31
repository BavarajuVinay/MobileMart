<!DOCTYPE html>
<html>
<head>
    <style>
        .title {
            color: white;
            top: 3%;
            left: 30%;
            height: 170px;
            width: 850px;
            position: absolute;
            font-size: 220%;
        }
        body {
            background-color: black;
            background-size: cover;
        }
        .tab {
            top: 25%;
            left: 10%;
            height: 80%;
            width: 80%;
            border-radius: 10px;
            position: absolute;
        }
        table {
            color: white;
            font-size: x-large;
        }
        th, td {
            padding: 20px;
        }
    </style>         
</head>
<body>
<?php
// Establish connection to the database
$servername = "localhost";
$username = "vinay";
$password = "vinay";
$dbname = "mydb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to retrieve data from the contact table
$sql = "SELECT * FROM contact";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo '<div class="title"><h1>CONTACT US DATA</h1></div>';
    echo '<div class="tab"><table border="10" width="100%" cellpadding="20" cellspacing="5"><tr><th>Name</th><th>Email</th><th>Mobile</th><th>Message</th></tr>';
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<th>' . $row["name"] . '</th>';
        echo '<th>' . $row["email"] . '</th>';
        echo '<th>' . $row["mobile"] . '</th>';
        echo '<th>' . $row["message"] . '</th>';
        echo '</tr>';
    }
    echo '</table></div>';
} else {
    echo "0 results";
}
$conn->close();
?>
</body>
</html>
