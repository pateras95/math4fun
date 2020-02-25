<?php
   include('../API/loginCheck.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>geia eimai i dafni</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    </head>
    <style>
        body, html {
            height: 100%;
            color: #777;
            line-height: 1.8;
        }

        .bgimg-1 {
            background: whitesmoke;
            min-height: 50%;
        }

        .main-logo{
            text-align:center;
        }

        a:link , a:visited{
            color:#3d3d3f;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 15px;
            font-weight: bold;
            text-decoration:none;
        }

        a:hover, a:active{
            color:#7dce94;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 15px;
            font-weight: bold;
            text-decoration:none;
        }

        .nav-on-scroll{
            background:#f9f8fd;
        }

        .bgimg-1, .bgimg-2, .bgimg-3 {
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
    <body>
        <!-- Navbar (sit on top) -->
        <div class="w3-top">
            <div class="w3-bar" id="myNavbar">
                <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
                    <i class="fa fa-bars"></i>
                </a>
                <a href="#home" class="w3-bar-item nav-text">Αρχική</a>
                <a href="#about" class="w3-bar-item  w3-hide-small nav-text"></i>Μαθήματα</a>
                <a href="#portfolio" class="w3-bar-item  w3-hide-small nav-text"></i>Τεστάκια</a>
                <a href="#contact" class="w3-bar-item w3-hide-small nav-text"></i>Παιχνίδια</a>
                <a href="../API/logout.php" class="w3-bar-item  w3-hide-small w3-right w3-hover-red nav-text">Αποσύνδεση</a>
                </a>
            </div>

            <!-- Navbar on small screens -->
            <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
                <a href="#about" class="w3-bar-item w3-button" onclick="toggleFunction()">Μαθήματα</a>
                <a href="#portfolio" class="w3-bar-item w3-button" onclick="toggleFunction()">Τεστάκια</a>
                <a href="#contact" class="w3-bar-item w3-button" onclick="toggleFunction()">Παιχνίδια</a>
                <a href="../API/logout.php" class="w3-bar-item w3-button">Αποσύνδεση</a>
            </div>
        </div>

        <div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
            <div class="w3-display-middle main-logo">
                <img src="../Assets/Images/logo.png" class="w-50"/>
            </div>
        </div>

        dawdawdaw
        <br>
        dawdawdaw
        <br>
        dawdawdaw
        <br>
        dawdawdaw
        <br>
        dawdawdaw
        <br>
        dawdawdaw
        <br>
        dawdawdaw
        <br>
        dawdawdaw
        <br>
        dawdawdaw
        <br>
        dawdawdaw
        <br>
        dawdawdaw
        <br>

        dawdawdaw
        <br>
        dawdawdaw
        <br>
        dawdawdaw
        <br>
        dawdawdaw
        <br>
        dawdawdaw
        <br>

        awdawd
        awdaw
        dawdawd
        awdawd
        wadawdwa
        dawdawdawd
        awdawdwa


        <script>
            // Modal Image Gallery
            function onClick(element) {
                document.getElementById("img01").src = element.src;
                document.getElementById("modal01").style.display = "block";
                var captionText = document.getElementById("caption");
                captionText.innerHTML = element.alt;
            }

            // Change style of navbar on scroll
            window.onscroll = function() {myFunction()};
            function myFunction() {
                var navbar = document.getElementById("myNavbar");
                if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
                    navbar.className = "w3-bar" + " w3-card" + " w3-animate-top" + " nav-on-scroll";
                } else {
                    navbar.className = navbar.className.replace(" w3-card w3-animate-top w3-white", "");
                }
            }

            // Used to toggle the menu on small screens when clicking on the menu button
            function toggleFunction() {
                var x = document.getElementById("navDemo");
                if (x.className.indexOf("w3-show") == -1) {
                    x.className += " w3-show";
                } else {
                    x.className = x.className.replace(" w3-show", "");
                }
            }
        </script>
    </body>
</html>