<?php 
session_start();
var_dump($_POST);

$random_id = str_pad(rand(10000, 99999), 4, '0', STR_PAD_LEFT);
$model = $_POST["model"];
$size = $_POST["size"]; // Assuming size is sent via POST
$cost = $_POST["cost"];
$name = $_SESSION["username"];
$email = $_SESSION["email"];
$date = $_POST["date"];
$time = $_POST["time"];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

echo "Welcome ".$size."<br>"; // Echoing size
echo "Welcome ".$date."<br>"; // Echoing date
echo "Welcome ".$time."<br>"; // Echoing time

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO bookings (id,image,name, email, model, size, cost, date, time) 
        VALUES ('$random_id','$image','$name', '$email', '$model', '$size', '$cost', '$date', '$time')";

$result = mysqli_query($conn, $sql);

if ($result == true) {
    echo "<script>alert('Booking Successful!')</script>";
    header("Location: home.php");
    exit(); // Ensure script stops execution after redirect
} else {
    echo "<script>alert('Error in Booking! Please try again later.')</script>";
}

?>
