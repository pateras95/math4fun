<?php
include('../API/loginCheck.php');
?>

<?php 
if(isset($_POST['submit'])){
    $to = "daphnekyprianou@outlook.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $subject = "Form submission";
    $message = $first_name ." wrote the following:" . "\n\n" . $_POST['message'];
    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
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
            <section class="section">
                <div class="row">
                    <!--Grid column-->
                    <div class="col-md-12 col-xl-12">
                        <form id="contact-form" name="contact-form" action="" method="POST">
                            <!--Grid row-->
                            <div class="row">
                                <!--Grid column-->
                                <div class="col-md-6">
                                    <div class="md-form">
                                        <input type="text" id="name" name="first_name" class="form-control">
                                        <label for="name" class="">Όνομα</label>
                                    </div>
                                </div>
                                <!--Grid column-->
                                <!--Grid column-->
                                <div class="col-md-6">
                                    <div class="md-form">
                                        <input type="text" id="email" name="email" class="form-control">
                                        <label for="email" class="">Email</label>
                                    </div>
                                </div>
                                <!--Grid column-->
                            </div>
                            <!--Grid row-->
                            <!--Grid row-->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="md-form">
                                        <input type="text" id="subject" name="subject" class="form-control">
                                        <label for="subject" class="">Τίτλος</label>
                                    </div>
                                </div>
                            </div>
                            <!--Grid row-->
                            <!--Grid row-->
                            <div class="row">
                                <!--Grid column-->
                                <div class="col-md-12">
                                    <div class="md-form">
                                        <textarea type="text" id="message" name="message" rows="5" class="form-control md-textarea"></textarea>
                                        <label for="message">Μύνημα</label>
                                    </div>
                                </div>
                            </div>
                            <!--Grid row-->
                        </form>

                        <div class="center-on-small-only">
                            <input type="submit" name="submit" value="Submit">
                        </div>
                        <div class="status"></div>
                    </div>
                </div>

            </section>
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