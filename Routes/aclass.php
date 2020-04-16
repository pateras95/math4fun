<?php
include('../API/loginCheck.php');
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Α΄ Γυμνασίου</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
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
                            <li><a href="#">Μαθηματικά Α΄ Γυμνασίου</a></li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="class-text">
                <h2 style="color:#FDB122">Άλγεβρα Α΄ Γυμνασίου</h2>
                <p>Παρακάτω θα βρείτε τα τελευταία φυλάδια της άγλεβρας.</p>
            </div>
            <iframe src="https://drive.google.com/embeddedfolderview?id=1SJ5LGRiw3Q_BNyNTsn1w-5gkOdhopL2r#grid" style="width:100%; height:300px; border:0"></iframe>
            <div class="line"></div>

            <div class="class-text">
                <h2 style="color:#FDB122">Γεωμετρία Α΄ Γυμνασίου</h2>
                <p>Παρακάτω θα βρείτε τα τελευταία φυλάδια της γεωμετρίας.</p>
            </div>
            <iframe src="https://drive.google.com/embeddedfolderview?id=1aSDrEMznP5uq2ycaYje2IFbvb0ye4Y9J#grid" style="width:100%; height:300px; border:0"></iframe>
            <div class="line"></div>

            <div class="class-text">
                <h2 style="color:#FDB122">Σύνδεσμοι Α΄ Γυμνασίου (Άλγεβρα)</h2>
                <p>Παρακάτω θα βρείτε τους συνδέσμους για online εξάσκηση.</p>
            </div>
            <div class="w-75  center-element">
                <table class="table">
                    <tbody>
                        <tr>
                            <th style="width: 40%" scope="row"> 1.	Έννοια κλάσματος - Ισοδύναμα Κλάσματα</th>
                            <td style="width: 60%"><a target="_blank" href="https://www.geogebra.org/m/xmhYtbwh">Σύνδεσμος εδώ</a></td>
                        </tr>
                        <tr>
                            <th scope="row"> 2.	ΜΚΔ και ΕΚΠ</th>
                            <td><a target="_blank" href="https://www.geogebra.org/m/HnKaq4pe#material/fWA3GbDr">Σύνδεσμος εδώ</a></td>
                        </tr>
                        <tr>
                            <th scope="row"> 3.	Πρόσθεση ακέραιων</th>
                            <td><a target="_blank" href="https://www.geogebra.org/m/uSafSkkk#material/d6BztDJF">Σύνδεσμος εδώ</a></td>
                        </tr>
                        <tr>
                            <th scope="row"> 4.	Πρόσθεση ρητών αριθμών</th>
                            <td>
                                <a target="_blank" href="https://www.geogebra.org/m/JnnWzBUy">Σύνδεσμος (α) εδώ</a>
                                <br>
                                <br>
                                <a target="_blank" href="https://www.geogebra.org/m/uSafSkkk#material/bmSXswGk">Σύνδεσμος (β) εδώ</a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row"> 5.	Παιχνίδι στην πρόσθεση ρητών αριθμών</th>
                            <td>
                                <a target="_blank" href="https://www.geogebra.org/m/uSafSkkk#material/v26g8rnm">Σύνδεσμος (α) εδώ</a>
                                <br>
                                <br>
                                <a target="_blank" href="https://www.geogebra.org/m/uSafSkkk#material/r9xjcrtf">Σύνδεσμος (β) εδώ</a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row"> 6.	Πολλαπλασιασμός ακεραίων</th>
                            <td><a target="_blank" href="https://www.geogebra.org/m/uSafSkkk#material/JrnSrBua">Σύνδεσμος εδώ</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="line"></div>

            <div class="class-text">
                <h2 style="color:#FDB122">Σύνδεσμοι Α΄ Γυμνασίου (Γεωμετρία)</h2>
                <p>Παρακάτω θα βρείτε τους συνδέσμους για online εξάσκηση.</p>
            </div>
            <div class="w-75 center-element">
                <table class="table">
                    <tbody>
                        <tr>
                            <th style="width: 40%" scope="row"> 1.	Συμμετρία ως προς σημείο</th>
                            <td style="width: 60%">
                                <a target="_blank" href="https://www.geogebra.org/m/uSafSkkk#material/MzYgutgb">Σύνδεσμος εδώ</a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">2.	Συμμετρία ως προς ευθεία</th>
                            <td>
                                <a target="_blank" href="https://www.geogebra.org/m/uSafSkkk#material/j4mGGpkK">Σύνδεσμος εδώ</a>  
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">3.	Συμμετρία ώς πρός άξονα</th>
                            <td>
                                <a target="_blank" href="https://www.geogebra.org/m/JPNGnucp#material/qsTUBX36">Σύνδεσμος εδώ</a>
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