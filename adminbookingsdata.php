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
    </style>
</head>
<body>
<div class="title">
    <h1>USERS BOOKINGS DATA</h1>
</div>
<div class="tab">
    <table style="color: white;font-size: x-large; " border="10" width="100%" cellpadding="20" cellspacing="5">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Model</th>
            <th>Size</th>
            <th>Cost</th>
            <th>Date</th>
            <th>Time</th>
        </tr>
        <?php
        try {
            $servername = "localhost";
            $username = "root";
            $password = ""; // Replace with your MySQL password
            $dbname = "mydb";

            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT * FROM bookings";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<th>" . $row["id"] . "</th>";
                    echo "<th>" . $row["name"] . "</th>";
                    echo "<th>" . $row["email"] . "</th>";
                    echo "<th>" . $row["model"] . "</th>";
                    echo "<th>" . $row["size"] . "</th>";
                    echo "<th>" . $row["cost"] . "</th>";
                    echo "<th>" . $row["date"] . "</th>";
                    echo "<th>" . $row["time"] . "</th>";
                    echo "</tr>";
                }
            } else {
                echo "0 results";
            }
            $conn->close();
        } catch (Exception $e) {
            ?>
            <script>alert('Exception occurred')</script>
            <?php
            echo $e->getMessage();
        }
        ?>
    </table>
</div>
</body>
</html>
