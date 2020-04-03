<?php
include('../API/loginCheck.php');
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Γ΄ Γυμνασίου</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="../Assets/css/style_sidebar.css">

    <style>
        .class-text {
            text-align: center;
        }
    </style>
</head>

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
        <div id="content" style="width=100%">

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
                            <li><a href="#">Μαθηματικά Γ΄ Γυμνασίου</a></li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="class-text">
                <h2 style="color=#FDB122">Άλγεβρα Γ΄ Γυμνασίου</h2>
                <p>Παρακάτω θα βρείτε τα τελευταία φυλάδια της άγλεβρας.</p>
            </div>
            <iframe src="https://drive.google.com/embeddedfolderview?id=1kUkJ4QuSUKG8XmStKIqO-KQEyG-Mj_EV#grid" style="width:100%; height:300px; border:0"></iframe>
            <div class="line"></div>

            <div class="class-text">
                <h2 style="color:#FDB122">Γεωμετρία Γ΄ Γυμνασίου</h2>
                <p>Παρακάτω θα βρείτε τα τελευταία φυλάδια της γεωμετρίας.</p>
            </div>
            <iframe src="https://drive.google.com/embeddedfolderview?id=1gvBO0g6xQmX8hswPxo5HuDcsoHTyE35R#grid" style="width:100%; height:300px; border:0"></iframe>
            <div class="line"></div>

            <div class="class-text">
                <h2 style="color:#FDB122">Σύνδεσμοι Γ΄ Γυμνασίου (Γεωμετρία)</h2>
                <p>Παρακάτω θα βρείτε τους συνδέσμους για online εξάσκηση.</p>
            </div>
            <div class="w-75 center-element">
                <table class="table">
                    <tbody>
                        <tr>
                            <th style="width: 40%" scope="row"> 1. Τριγωνομετρικοί αριθμοί γωνιών από 0ο έως 180 ο μοίρες</th>
                            <td style="width: 60%">
                                <a target="_blank" href="https://www.geogebra.org/m/bUbmVyBH">Σύνδεσμος (α) εδώ</a>
                                <br>
                                <br>
                                <a target="_blank" href="https://www.geogebra.org/m/S6xCG38T#material/j3cq2hF7">Σύνδεσμος (β) εδώ</a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row"> 2.	Τριγωνομετρικοί αριθμοί παραπληρωματικών γωνιών</th>
                            <td>
                                <a target="_blank" href="https://www.geogebra.org/m/VYrgsWvM">Σύνδεσμος εδώ</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
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