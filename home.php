<?php 
// start the session 
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<html>
    <head>
        <title>Header</title>
        <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Rancho&effect=neon|anaglyph"> -->
        <style>
            button {
                display: inline-block;
                padding: 15px 25px;
                font-size: 18px;
                cursor: pointer;
                text-align: center;
                text-decoration: none;
                outline: none;
                color: #fff;
                background-color:rgb(9, 42, 233);
                border: none;
                border-radius: 15px;
                box-shadow: 0 9px rgb(24, 22, 22);
            }
            button:hover 
            {
                background-color: #ee210e
            }
            button:active {
                background-color: #e93d0d;
                box-shadow: 0 5px rgb(14, 11, 11);
                transform: translateY(4px);
            }
            .size{
                font-size: 40px;
            }
            .recom{
                background-size:contain;
                background-color:black;
                color: white;
                width: 350px;
                height: 50px;
                border-radius: 4% 4% 4% 4%;
                padding: 25px;
                margin: 10px;
                position: absolute;
                top: 23%;
                left: 3%;
                font-size:large;
            }
            .movies
            {
                background-size:contain;
                background-color:black;
                width: 250px;
                height: 350px;
                border-radius: 4% 4% 4% 4%;
                padding: 25px;
                margin: 10px;
                position: absolute;
            }
            .m1{
                top: 36%;
                left:3%;
            }
            .m2{
                top: 36%;
                left: 21%;
            }
            .m3{
                top: 36%;
                left: 39%;
            }
            .m4{
                top: 36%;
                left: 57%;
            }
            .m5{
                top: 36%;
                left:75%;
            } 
            .m6
            {
                top: 90%;
                left: 3%;
            }
            .m7
            {
                top: 90%;
                left: 21%;
            }
            .m8 
            {
                top: 90%;
                left: 39%;
            }
            .m9
            {
                top: 90%;
                left: 57%;
            }
            .m10
            {
                top: 90%;
                left: 75%;
            }
            .search{
                position: absolute;
                border: none;
                height: 40px;
                width: 250px;
                top: 8%;
                left: 82%;
                padding: 0px 5px;
                border-radius: 90px;
                font-size: 18px;
                color: #424242;
                font-weight: 500;
                /* background-color: yellow; */
            }
            /* .m1 .btn
            {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                -ms-transform: translate(-50%, -50%);
                background-color:;
                color: white;
                font-size: 16px;
                padding: 12px 24px;
                border: none;
                cursor: pointer;
                border-radius: 5px;
                text-align: center;
            } */
            body{
                /* background-image: url('https://th.bing.com/th/id/OIP.7KAEVm2VDi67n7KGC_BlpwHaFL?w=266&h=186&c=7&r=0&o=5&dpr=1.7&pid=1.7');
                background-size: cover;
                background-repeat: no-repeat; */
                background-color: black;
                color: white;
            }
            /* title
            {
                display: block;
                margin-left: auto;
                margin-right: auto;
                width: 50%;
            } */
            .t1
            {
                vertical-align: top;
            }
            .movies:hover 
            {
                transform: scale(1.1);
                /* width: 300px; */
                /* height: 570px; */
            }
            /* * {
                box-sizing: border-box;
            }
            .topnav
            {
                position: absolute;
                background-color: red;
                top: 7%;
                left: 80%;
                height:160px;
                width: 250px;
            }
            /* styling search bar */
    /* .search input[type=text]{
        width:300px;
        height:40px;
        border-radius:25px;
        border: none;
    }
         
    .search{
        float:right;
        margin:7px;
        top: 0%;
        left: 0px;
        background-color: red;
        height: 130px;
        width: 400px;
    }
         
    .search button{
        background-color: #0074D9;
        color: #f2f2f2;
        float: right;
        padding: 5px 10px;
        margin-right: 16px;
        font-size: 12px;
        border: none;
        cursor: pointer;
    } */ 
        </style>
    </head>
    <body>
        <img align="left" src="https://dvm9jp3urcf0o.cloudfront.net/logo-ideas/technology-logo/mobile-store.png" height="170" width="160"> <p>&nbsp;</p>
        <!-- <img class="title" style="align-items: center;" src="C:\Users\B V N DURGA VINAY\OneDrive\Documents\fsd final project front end\movie munch.jpg" height="140px" width="550px" alt=""> -->
        <h1 class="font-effect-neon" style="font-family: Verdana, Geneva, Tahoma, sans-serif;text-align: center; font-size:xxx-large;">Online&ensp;Mobile&ensp;Shopping</h1>
        <input type="text" placeholder="Search" class="search">
        <!-- <div class="search">
            <form action="#">
                <input type="text"
                    placeholder=" Search Movies"
                    name="search">
                   <button>
                    <i class="fa fa-search"
                        style="font-size: 18px;">
                    </i>
                </button> 
                <div class="search-button">
                    <a href="#"><img src="https://th.bing.com/th/id/OIP.u3wmwqe0vx6tHhATZzkGrAHaHa?pid=ImgDet&w=900&h=900&rs=1" height="40px" width="25px" alt="">
                </div>
            </form>
        </div>  -->
        <table class="t1" border="0" align="center" cellspacing="3" cellpadding="20">
            <tr>
                <th><a href="home.php"><button class="button">Home</button></a></th>
                <th><a href="bookings.php"><button class="button">Bookings</button></a></th>
                <th><a href="contact.php"><button class="button">Contact us</button></a></th>
                <th><a href="about.html"><button class="button">About us</button></a></th>
                
                <?php
                if(isset($_SESSION["username"])){ 
                    $uname = $_SESSION["username"]; 
                ?>
                <th><button class="button"><?php echo "Welcome ".$uname ?></button></a></th>
                <th><a href="logout.php"><button class="button">Logout</button></a></th>
                <?php
                }
                else{
                    ?>
                    <th><a href="login.html"><button class="button">Login</button></a></th>
                <?php
                }
                ?>
            </tr>
        </table>
        <div class="recom font-effect-anaglyph">
            <h1><b>Top Brands</b></h1>
        </div>
        <table cellspacing="5">
            <div>
                <tr>
                    <div class="movies m1"><a href="mv1.php"><img src="https://m.media-amazon.com/images/I/71d7rfSl0wL._AC_UY327_FMwebp_QL65_.jpg" height="100%" width="100%" alt="Sorry1"></a>
                    <h2>Apple iPhone 15</h2><h3>&#8377;80,999</h3></div>
                </tr>
                <tr>
                    <div class="movies m2"><a href="mv2.php"><img src="https://m.media-amazon.com/images/I/91ItZJh1FDL._AC_UY327_FMwebp_QL65_.jpg" height="100%" width="100%" alt="Sorry2"></a>
                    <h3>Samsung Galaxy M34 5G</h3><h3>&#8377;19,999</h3></div>
                </tr>
                <tr>
                    <div class="movies m3"><a href="mv3.php"><img src="https://m.media-amazon.com/images/I/81FeGlImflL._AC_UY327_FMwebp_QL65_.jpg" height="100%" width="100%" alt="Sorry3"></a>
                    <h2>Oppo F25 Pro 5G</h2><h3>&#8377;23,999</h3></div>
                </tr>
                <tr>
                    <div class="movies m4"><a href="mv4.php"><img src="https://m.media-amazon.com/images/I/71hd6n3-jTL._AC_UL480_FMwebp_QL65_.jpg" height="100%" width="100%" alt="Sorry4"></a>
                    <h2>Vivo V29e 5G</h2><h3>&#8377;24,648</h3></div>
                </tr>
                <tr>
                    <div class="movies m5"><a href="mv5.php"><img src="https://m.media-amazon.com/images/I/81jeBCCEzXL._AC_UY327_FMwebp_QL65_.jpg" height="100%" width="100%" alt="Sorry5"></a>
                    <h2>HONOR 90</h2><h3>&#8377;29,999</h3></div>
                </tr>
                <tr>
                    <div class="movies m6"><a href="mv6.php"><img src="https://m.media-amazon.com/images/I/71NnrsYP63L._AC_UY327_FMwebp_QL65_.jpg" height="100%" width="100%" alt="Sorry6"></a>
                    <h2>Redmi Note 13 5G</h2><h3>&#8377;19,999</h3></div>
                </tr>
                <tr>
                    <div class="movies m7"><a href="mv7.php"><img src="https://m.media-amazon.com/images/I/61u3TvHUOsL._SX679_.jpg" height="100%" width="100%" alt="Sorry7"></a>
                    <h2>Motorola Moto G71 5G</h2><h3>&#8377;17,740</h3></div>
                </tr>
                <tr>
                    <div class="movies m8"><a href="mv8.php"><img src="https://m.media-amazon.com/images/I/81QvAGRjTAL._AC_UY327_FMwebp_QL65_.jpg" height="100%" width="100%" alt="Sorry8"></a>
                    <h2>realme 12 Pro 5G</h2><h3>&#8377;24,429</h3></div>
                </tr>
                <tr>
                    <div class="movies m9"><a href="mv9.php"><img src="https://m.media-amazon.com/images/I/61VbKHdE0rL._SX679_.jpg" height="100%" width="100%" alt="Sorry9"></a>
                    <h2>iQOO Z6 Lite 5G</h2><h3>&#8377;11,499</h3></div>
                </tr>
                <tr>
                    <div class="movies m10"><a href="mv10.php"><img src="https://m.media-amazon.com/images/I/61BAuSC0UnL._AC_UY327_FMwebp_QL65_.jpg" height="100%" width="100%" alt="Sorry10"></a>
                    <h2>OnePlus 12</h2><h3>&#8377;69,999</h3></div>
                </tr>
            </div>
        </table>
    </body>
</html>



