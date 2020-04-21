<?php
include('../API/loginCheck.php');
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Επικοινωνία</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="../Assets/css/style_sidebar.css">

    <style>
        .class-text {
            text-align: left;
            margin-left: 25px;
        }
    </style>
</head>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API = Tawk_API || {},
        Tawk_LoadStart = new Date();
    (function() {
        var s1 = document.createElement("script"),
            s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/5e81f35069e9320caabe79e4/default';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();
</script>
<!--End of Tawk.to Script-->

<body>
    <div class="wrapper">
        <!-- Sidebar Holder -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <img src="../Assets/Images/logo_final.png" style="width:200px" />
            </div>

            <ul class="list-unstyled components">
                <li class="active">
                    <a href="mainRoute.php">Αρχική</a>
                </li>
                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false">Τάξεις</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li><a href="aclass.php">Α΄ Γυμνασίου</a></li>
                        <li><a href="bclass.php">Β΄ Γυμνασίου</a></li>
                        <li><a href="cclass.php">Γ΄ Γυμνασίου</a></li>
                    </ul>
                </li>
                <li>
                    <a href="calendarRoute.php">Ημερολόγιο Ασκήσεων</a>
                </li>
                <li>
                    <a href="links.php">Χρήσιμα Link</a>
                </li>
                <li>
                    <a href="contact.php">Επικοινωνία</a>
                </li>
            </ul>

            <ul class="list-unstyled CTAs">
                <li><a href="../API/logout.php" class="download">Αποσύνδεση</a></li>
            </ul>
        </nav>

        <!-- Page Content Holder -->
        <div id="content" style="width:100%">

            <nav class="navbar navbar-default">
                <div class="container-fluid">

                    <div class="navbar-header">
                        <button type="button" id="sidebarCollapse" class="navbar-btn">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                    </div>

                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#">Επικοινωνία</a></li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="class-text">
                <h2 style="color:#FDB122">Επικοινωνία</h2>
                <p>Παρακάτω θα βρείτε τους συνδέσμους με τους οποίους μπορείτε να επικοινωνήσετε μαζί μου ή να μου στείλετε κάποιο μήνυμα στο προσωπικό μου ηλεκτρονικό ταχυδρομίο.</p>
            </div>
            <div class="line"></div>

            <script src="https://apps.elfsight.com/p/platform.js" defer></script>
            <div class="elfsight-app-3a8a78fe-3dc0-480b-92aa-d896e7d68b2e"></div>
            
            <div class="elfsight-app-9d92064e-b3cd-42c2-bdc0-984543832330"></div>

        </div>
    </div>





    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <!-- Bootstrap Js CDN -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#sidebarCollapse').on('click', function() {
                $('#sidebar').toggleClass('active');
                $(this).toggleClass('active');
            });
        });
    </script>
</body>

</html>