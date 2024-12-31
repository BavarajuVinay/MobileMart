<?php
// Starting session
session_start();
?> 
<html>
<head>
    <title>Bookings</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $(".delete-btn").click(function(){
        var id = $(this).closest("tr").find(".id").text();
        $.ajax({
            type: "POST",
            url: "delete_booking.php?id=" + id, // Pass the ID as a query parameter
            success: function(data){
                alert("Successfully cancelled!"); // Show success message
                location.reload(); // Reload the page to update the table
            }
        });
    });
});
</script>

</head>
<style>
        .title 
        {
            top: 3%;
            left: 25%;
            height: 170px;
            width: 780px;
            position: absolute;
            font-size: 320%;
            /* border: 1px solid white; */
            color: white;
        }
        .bkp
        {
            /* background-color: white; */
            color: white;
            border: 1px solid white;    
            border-radius: 8px 8px 8px 8px;
            height: 200px;
            width: 780px;
            top: 24%;
            left: 25%;
            position: absolute;
        }
        .lg
        {
            height: 80px;
            width: 150px;
            top: 38%;
            left: 43%;
            position: absolute;
        }
        body
        {
            /* background-image: url('https://www.androidleo.com/wp-content/uploads/iPhone-15-series-androidleo-a0068.jpg'); */
            /* background-size: cover; */
            background-color: black;
        }

        .details{
            position: absolute;
            top: 30%;
            left: 10%;
            /* background-color: green; */
            height: 100px;
            width: 1350px;
            
        }
        button {
                /* padding: 10px 20px; */
                padding: 4px;
                font-size: 18px;
                cursor: pointer;
                text-align: center;
                text-decoration: none;
                outline: none;
                color: #fff;
                background-color:rgb(9, 42, 233);
                border: none;
                border-radius: 15px;
                /* box-shadow: 0 6px 6px white; */
                width: 120px;
                left: 60%;
            }
            button:hover 
            {
                background-color: #ee210e;
                /* transform: scale(1.1); */
                /* transform: translate(100px); */
                /* transform: rotate(355deg); */
                /* transform: skewY(30deg); */
                
            }
            button:active {
                background-color: #e93d0d;
                box-shadow: 0 5px rgb(14, 11, 11);
                transform: translateY(4px);
            }
            
            .button-style{
                position: absolute;
                top: 75%;
                left: 64%;
            }
            .lg-1{
                position:relative;
                top: 40%;
                left: 45%;
                width: 120px;
            }
            .delete-btn{
                /* position: absolute; */
                display: flex;
                justify-content: center;
            }
    </style>

<body>
<div class="title">
    <center><h1>BOOKINGS</h1></center> 
</div>
<?php 
if(!isset($_SESSION["username"]))
{
    ?>
    <div class="bkp">
        <h1 align="center">Oops! You have not done any bookings yet.</h1>
        <h2 align="center">To see your past bookings please Login</h2>
    </div>
    <div class="lg">
        <a href="login.html"><img src="https://th.bing.com/th/id/R.3b66bdf4f0cb048317fd9c6af11ec285?rik=KOX0uEQgAqrTuA&riu=http%3a%2f%2fwww.clker.com%2fcliparts%2fm%2fm%2fx%2fr%2fJ%2f6%2flogin-button-png-hi.png&ehk=9YrAox2MHfbmPuHTJyqUlcyTNAulz6kYT0nmn43bkbo%3d&risl=&pid=ImgRaw&r=0" height="50px" width="170px" alt=""></a>
    </div>
 <?php 
}
else 
{
    $uname = $_SESSION["username"];
    $conn = mysqli_connect("localhost", "root","","mydb");
    if(!$conn)
    {
        die("Connection failed : ".mysqli_connect_error());
    }
    $sql = "SELECT * FROM bookings where name = '$uname'";
    $result = mysqli_query($conn,$sql);
    if($result->num_rows>0)
    {
        ?>
        <div class="details">
            <table align="center" border="5" style="color:white;font-size:xx-large" width="100%">  
            <tr>
                <th>Id</th>
                <th>Model</th>
                <th>Size</th>
                <th>Cost</th>
                <th>Date</th>
                <th>Time</th>
                <th>Action</th> <!-- New column for delete button -->
            </tr>
            <?php
            while($row = mysqli_fetch_assoc($result)) 
            {
            ?>
            <tr>
                <td class="id"><?php echo $row["id"]?> </td>
                <td><?php echo $row["model"]?> </td>
                <td><?php echo $row["size"]?> </td>
                <td><?php echo $row["cost"]?> </td>
                <td><?php echo $row["date"]?> </td>
                <td><?php echo $row["time"]?> </td>
                <td style='text-align:center; vertical-align:middle'>
                   <button class="delete-btn">Cancel</button>
                </td>
 
            </tr>
            <?php  
            }
            ?>
            </table>
        </div>
    <?php
    }
    else{ ?>
        <div class="bkp">
            <h1 align="center">Oops! You have not done any bookings yet.</h1>
            <h2 align="center">Ready to turn wishes into reality? Start booking now and unlock a world of possibilities!</h2>
        </div>
        <div class="lg-1">
           <a href="home.php"><button class="button">Explore Now</button></a>
        </div>
    <?php
    }
    ?>
 <?php 
} ?>
</body>
</html>
