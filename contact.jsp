<?php
session_start();
?>
<html>
<head>
    <title>contact us</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Rancho&effect=neon|anaglyph">
    <style>
        .class-1 {
            background-image: url('https://th.bing.com/th/id/R.47e9727671dca244c4f85d1514f95bd2?rik=mx7erd4hoEfA6Q&riu=http%3a%2f%2fs3.amazonaws.com%2fs3.timetoast.com%2fpublic%2fuploads%2fphotos%2f1710418%2fmovie_theatre.jpg%3f1473730546&ehk=Dq30S8eY%2brOrO%2brLZmx28biS5u6%2bxwObvyXx25XDIK8%3d&risl=&pid=ImgRaw&r=0');
            background-size: cover;
            color: white;
            width: 1700px;
            height: 490px;
            left: 0%;
            top: 0%;
            position: absolute;
        }

        .class-2 {
            color: white;
            width: 870px;
            height: 390px;
            left: 23%;
            top: 5%;
            position: absolute;
        }

        .c2 {
            font-size: 780%;
        }

        .class-3 {
            /* background-color: green; */
            top: 55%;
            left: 7%;
            width: 1500px;
            height: 100px;
            position: absolute;
        }

        .tab {
            text-align: left;
        }

        .textbox-size {
            width: 100%;
            height: 50px;
        }

        .textbox {
            height: 100px;
            width: 100%;
        }

        .class-4 {
            top: 120%;
            left: 7%;
            width: 780px;
            height: 150px;
            position: absolute;
        }

        input[type="submit"],
        input[type="reset"] {
            width: 120px;
            height: 30px;
            background-color: rgba(41, 32, 32, 0.584);
            color: white;
            border-radius: 8% 8% 8% 8%;
            font-size: small;
        }

        input[type="submit"]:hover {
            background-color: transparent;
            color: black;
        }
    </style>
</head>
<body>
<div class="class-1">
    <div class="class-2">
        <h1 align="center" class="c2">Contact Us</h1>
        <h2 align="center">At Movie Munch, we pride ourselves on excellent customer service. Contact us today and
            experience it for yourself!</h2>
    </div>
</div>
<form action="contactus.php" method="post">
    <div class="class-3">
        <caption><h1>Write us by filling the form</h1></caption>
        <table border="0" class="tab" width="100%" height="100%" cellspacing="3">
            <tr>
                <th><h1>Name</h1></th>
            </tr>
            <tr>
                <td>
                    <input class="textbox-size" type="text" placeholder="Please enter your name" name="name" required>
                </td>
            </tr>
            <tr>
                <th><h1>Email</h1></th>
                <th><h1>Mobile</h1></th>
            </tr>
            <tr>
                <td>
                    <input type="email" class="textbox-size" value="<?php echo isset($_SESSION['email']) ? $_SESSION['email'] : ''; ?>" readonly placeholder="Email">
                </td>
                <td>
                    <input class="textbox-size" type="text" placeholder="94935XXXXX" name="ph1" required>
                </td>
            </tr>
            <tr>
                <th><h1>Message</h1></th>
            </tr>
            <tr>
                <td><input class="textbox" type="text" placeholder="Write your query here" name="msg1" required></td>
            </tr>
            <tr>
                <td>
                    <input type="reset" value="reset">
                </td>
                <td>
                    <input type="submit" value="submit">
                </td>
            </tr>
        </table>
    </div>
</form>
<div class="class-4">
    <caption><h1>Contact Us</h1></caption>
    <table border="0" class="tab" cellpadding="22">
        <tr>
            <th><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTyyRB2ulnAlCEfxFq7kEHsFNw-930gjHvw0mYW6C0KKy3AUqCgXcRx0aDYkwDNLfk7nZs&usqp=CAU" height="40px" width="50px" alt=""></th>
            <th>Movie Munch Entertainment Ground Floor,Opposite milkproject,Chittinagar,Vijayawada,Krishna,Andhra Pradesh-520001</th>
        </tr>
        <tr>
            <th><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTyyRB2ulnAlCEfxFq7kEHsFNw-930gjHvw0mYW6C0KKy3AUqCgXcRx0aDYkwDNLfk7nZs&usqp=CAU" height="40px" width="50px" alt=""></th>
            <th>Contact : +91 9493574740<br>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; +91 9494323537<br>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; +91 9030521989</th>
        </tr>
    </table>
</div>
</body>
</html>
