<?php
require "db.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Hello</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="lana1.css">
</head>
<body>



<header class="header">
    <div class="container">
        <div class="header_inner">
            <div class="header_logo">LoLo</div>
            <nav class="nav">
                <a class="nav_link" href="#" style=" text-decoration:none;" >About</a>
                <a class="nav_link" href="#" style=" text-decoration:none;" >Service</a>
                <a class="nav_link" href="#" style=" text-decoration:none;" >Blog</a>
                <a class="nav_link" href="#" style=" text-decoration:none;" >Work</a>
                <a class="nav_link" href="#" style=" text-decoration:none;" >Contact</a>
                <form action="index.php" method="POST">
                    <?php
                    if(isset($_SESSION['logged_user'])) : ?>

                        <h1> you Login!</h1>
                        <hr>
                        <a href="private.php" class="button">Your page</a><br>

                    <?php else : ?>

                            <a class="nav_link_sec" href="login.php">Login</a>
                            <a class="nav_link_sec"  href="lana.php" >Sign up</a>


                    <?php endif; ?>
                </form>





            </nav>
        </div>
    </div>
</header>



<div class="navbar">
    <div class="container-fluid">
        <div class="intro_inner">
            <h2 class="intro_suptitle">Everything you love</h2>
            <h1 class="intro_title">Welcome to LoLo</h1>
            <a class="btn" href="#" >Learn more</a>


        </div>
    </div>
</div>




<div class="container">


</div>



</body>
</html>