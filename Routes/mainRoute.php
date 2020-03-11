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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amatic+SC">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
</head>
<style>
body,
html {
    height: 100%;
    color: #777;
    line-height: 1.2;
}

.bgimg-1 {
    background: whitesmoke;
    min-height: 50%;
}

.center-div {
    text-align: center;
}

.main-logo {
    margin-top: 15%;
    width: 65%;
}

.w3-bar-item:hover {
    border-top: 3px solid black;
}

a:link,
a:visited {
    margin-right: 10px;
    margin-left: 10px;
    color: black;
    font-family: "Amatic SC", sans-serif;
    font-size: 25px;
    font-weight: bold;
    text-decoration: none;
    margin-top: 5px;
}

a:hover {
    border-top: 3px solid black;
}

a:active {
    font-family: "Amatic SC", sans-serif;
    font-size: 25px;
    font-weight: bold;
    text-decoration: none;
}

.nav-on-scroll {
    background: #EDE2E2;
}

.bgimg-1 {
    background-image: url('../Assets/Images/back.png');
    height: 55%;
}

.bgimg-1,
.bgimg-2,
.bgimg-3 {
    background-attachment: fixed;
    /* background-position: center; */
    background-repeat: no-repeat;
}

.menu {
    width: 50px;
    height: 50px;
    position: absolute;
    z-index: 21;
    right: 1%;
}

.menu span {
    position: relative;
    margin-top: 9px;
    margin-bottom: 9px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    position: absolute;
    top: 50%;
    left: 50%;
    margin-left: -15px;
    margin-top: -1.5px;
}

.menu span,
.menu span::before,
.menu span::after {
    display: block;

    width: 26px;
    right: 0;
    height: 3px;
    background-color: black;
    outline: 1px solid transparent;
    -webkit-transition-property: background-color, -webkit-transform;
    -moz-transition-property: background-color, -moz-transform;
    -o-transition-property: background-color, -o-transform;
    transition-property: background-color, transform;
    -webkit-transition-duration: 0.3s;
    -moz-transition-duration: 0.3s;
    -o-transition-duration: 0.3s;
    transition-duration: 0.3s;
}

.menu span::before,
.menu span::after {
    position: absolute;
    content: "";
}

.menu span::before {
    top: -9px;
    width: 20px
}

.menu span::after {
    top: 9px;
    width: 33px;

}

.menu.clicked span {
    background-color: transparent;
}

.menu.clicked span::before {
    -webkit-transform: translateY(9px) rotate(45deg);
    -moz-transform: translateY(9px) rotate(45deg);
    -ms-transform: translateY(9px) rotate(45deg);
    -o-transform: translateY(9px) rotate(45deg);
    transform: translateY(9px) rotate(45deg);
    width: 33px;
}

.menu.clicked span::after {
    -webkit-transform: translateY(-9px) rotate(-45deg);
    -moz-transform: translateY(-9px) rotate(-45deg);
    -ms-transform: translateY(-9px) rotate(-45deg);
    -o-transform: translateY(-9px) rotate(-45deg);
    transform: translateY(-9px) rotate(-45deg);
}

.menu.clicked span:before,
.menu.clicked span:after {
    background-color: black;
}

.menu:hover {
    cursor: pointer;
}

/*  NAV
========================================== */

#nav {
    background: whitesmoke;
    position: fixed;
    z-index: 20;
    top: 0;
    right: 0;
    height: 100%;
    max-width: 250px;
    width: 100%;
    padding: 100px 40px 60px 40px;
    overflow-y: auto;
    -webkit-transform: translateX(100%);
    -moz-transform: translateX(100%);
    -ms-transform: translateX(100%);
    -o-transform: translateX(100%);
    transform: translateX(100%);
    -webkit-transition: transform 0.55s cubic-bezier(0.785, 0.135, 0.15, 0.86);
    -moz-transition: transform 0.55s cubic-bezier(0.785, 0.135, 0.15, 0.86);
    -o-transition: transform 0.55s cubic-bezier(0.785, 0.135, 0.15, 0.86);
    transition: transform 0.55s cubic-bezier(0.785, 0.135, 0.15, 0.86);
}

#nav.show {
    -webkit-transform: translateX(0px);
    -moz-transform: translateX(0px);
    -ms-transform: translateX(0px);
    -o-transform: translateX(0px);
    transform: translateX(0px);
}

#nav.show ul.main li {
    -webkit-transform: translateX(0px);
    -moz-transform: translateX(0px);
    -ms-transform: translateX(0px);
    -o-transform: translateX(0px);
    transform: translateX(0px);
    opacity: 1;
}

.menu.clicked {
    position: fixed;
    z-index: 99;
}

#nav.show ul.main li:nth-child(1) {
    transition-delay: 0.15s;
}

#nav.show ul.main li:nth-child(2) {
    transition-delay: 0.3s;
}

#nav.show ul.main li:nth-child(3) {
    transition-delay: 0.45s;
}

#nav.show ul.main li:nth-child(4) {
    transition-delay: 0.6s;
}

#nav.show ul.main li:nth-child(5) {
    transition-delay: 0.75s;
}

#nav.show ul.main li:nth-child(6) {
    transition-delay: 0.9s;
}

#nav.show ul.main li:nth-child(7) {
    transition-delay: 1.05s;
}

#nav.show ul.main li:nth-child(8) {
    transition-delay: 1.2s;
}

#nav.show ul.main li:nth-child(9) {
    transition-delay: 1.35s;
}

#nav.show .about,
#nav.show .social,
#nav.show ul.sub {
    -webkit-transform: translateY(0px);
    -moz-transform: translateY(0px);
    -ms-transform: translateY(0px);
    -o-transform: translateY(0px);
    transform: translateY(0px);
    opacity: 1;
    transition-delay: .85s;
}

@media (min-width: 667px) {
    #nav {
        padding: 120px 30px 70px 20px;
    }
}

#nav ul.main {

    list-style-type: none;
}

#nav ul.main li {
    color: black;
    -webkit-transform: translateX(40px);
    -moz-transform: translateX(40px);
    -ms-transform: translateX(40px);
    -o-transform: translateX(40px);
    transform: translateX(40px);
    opacity: 0;
    -webkit-transition: all 0.3s ease;
    -moz-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    transition: all 0.3s ease;
    float: none;
    list-style: circle;
    color: #fff
}

#nav ul.main li:last-of-type {
    margin-bottom: 0px;
}

#nav ul.main li a {
    color: black;

    text-decoration: none;
    text-transform: uppercase;
    font-size: 25px;
    display: block;
    padding: 10px 0;
    -webkit-transition: all 0.3s ease;
    -moz-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    transition: all 0.3s ease;
}

#nav ul.main li a span {
    color: black;
}

#nav ul.main li a:hover {
    color: black;
}

#nav ul.sub {
    list-style-type: none;
    margin-top: 40px;
    -webkit-transform: translateY(30px);
    -moz-transform: translateY(30px);
    -ms-transform: translateY(30px);
    -o-transform: translateY(30px);
    transform: translateY(30px);
    opacity: 0;
    -webkit-transition: all 0.4s ease;
    -moz-transition: all 0.4s ease;
    -o-transition: all 0.4s ease;
    transition: all 0.4s ease;
}

#nav ul.sub li {
    margin-bottom: 10px;
}

#nav ul.sub li:last-of-type {
    margin-bottom: 0px;
}

#nav ul.sub li a {
    color: #ffffff;
    font-family: "Amatic SC", sans-serif;
    letter-spacing: 1px;
    font-size: 2rem;
    text-decoration: none;
    -webkit-transition: all 0.3s ease;
    -moz-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    transition: all 0.3s ease;
}

#nav ul.sub li a:hover {
    color: #b7ac7f;
}

.menu:hover span {}

/*  OVERLAY
========================================== */
.overlay {
    position: fixed;
    top: 0;
    left: 0;
    z-index: 7;
    width: 100%;
    height: 100%;
    -webkit-transition: all 0.3s ease-in-out;
    -moz-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
    background-color: #603e82;
    opacity: 0;
    visibility: hidden;
}

.overlay.show {
    opacity: 0.8;
    visibility: visible;
}

.vertical-align {
    display: flex;
    align-items: center;
    margin-bottom: 0;
}

.card-deck {
    background: rgba(0, 0, 0, 0.5);
    position: relative;
    margin: auto;
    border-radius: 15px;
    width: 60%;
    padding: 10px;
    align-content: center;
    top: -10%
}
</style>

<body>
    <!-- Navbar (sit on top) -->
    <div class="w3-top vertical-alig">
        <div class="w3-bar" id="myNavbar">
            <a class="w3-hide-medium w3-hide-large w3-right">
                <div id="navDemo" class="menu"> <span></span> </div>
            </a>
            <a href="#home" class="w3-bar-item disabled">Home</a>
            <a href="#about" class="w3-hide-small w3-bar-item">Class A</a>
            <a href="#portfolio" class="w3-hide-small w3-bar-item">Class B</a>
            <a href="#contact" class="w3-hide-small w3-bar-item">Class C</a>
            <a href="../API/logout.php" class="w3-hide-small w3-bar-item w3-right">Log Out</a>
            </a>
        </div>

        <!-- Navbar on small screens -->

        <nav id="nav">
            <ul class="main">
                <li><a href="#about">Class A</a></li>
                <li><a href="#portfolio">Class B</a></li>
                <li><a href="#contact">Class C</a></li>
                <li><a href="../API/logout.php">Log Out</a></li>
            </ul>
        </nav>
        <div class="overlay"></div>
        <!-- </div> -->
    </div>

    <div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
        <div class="w3-display-middle" style="white-space:nowrap;">
            <span class="w3-center w3-padding-large w3-animate-opacity">
        </div>
    </div>

    <div class="card-deck ">
        <div class="card" style="width:400px">
            <img class="card-img-top" src="https://www.w3schools.com/bootstrap4/img_avatar1.png" alt="Card image" style="width:100%">
            <div class="card-body">
                <h4 class="card-title">John Doe</h4>
                <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                <a href="#" class="btn btn-primary">See Profile</a>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="https://via.placeholder.com/362x200" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="https://via.placeholder.com/362x200" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                    content. This card has even longer content than the first to show that equal height action.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
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
    window.onscroll = function() {
        myFunction()
    };

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

    $('.menu, .overlay').click(function() {
        $('.menu').toggleClass('clicked');

        $('#nav').toggleClass('show');

    });
    </script>
</body>

</html>