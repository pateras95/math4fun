<?php
include('../API/loginCheck.php');
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>B΄ Γυμνασίου</title>

    <!-- Bootstrap CSS CDN -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="../Assets/css/style_sidebar.css">

    <style>
        .class-text {
            text-align: center;
        }

        .center-element{
            margin:auto;
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
                            <li><a href="#">Μαθηματικά B΄ Γυμνασίου</a></li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="class-text">
                <h2 style="color:#FDB122">Άλγεβρα B΄ Γυμνασίου</h2>
                <p>Παρακάτω θα βρείτε τα τελευταία φυλάδια της άγλεβρας.</p>
            </div>
            <iframe src="https://drive.google.com/embeddedfolderview?id=1LUFxDSBUw7NCjl4Wbl-BckdY9mtG3NpA#grid" style="width:100%; height:300px; border:0"></iframe>
            <div class="line"></div>

            <div class="class-text">
                <h2 style="color:#FDB122">Γεωμετρία B΄ Γυμνασίου</h2>
                <p>Παρακάτω θα βρείτε τα τελευταία φυλάδια της γεωμετρίας.</p>
            </div>
            <iframe src="https://drive.google.com/embeddedfolderview?id=1gwxG3DrKfpTlTQHsC-rxd9nAAwLd-B1l#grid" style="width:100%; height:300px; border:0"></iframe>
            <div class="line"></div>

            <div class="class-text">
                <h2 style="color:#FDB122">Σύνδεσμοι B΄ Γυμνασίου (Άλγεβρα)</h2>
                <p>Παρακάτω θα βρείτε τους συνδέσμους για online εξάσκηση.</p>
            </div>
            <div class="w-75 center-element">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Τίτλος</th>
                            <th scope="col">Σύνδεσμος</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="table-primary">
                            <td scope="row">Συντεταγμένες σημείου</td>
                            <td><a target="_blank" href="https://www.geogebra.org/m/Jnt9VSmb#material/VUnV62vT"><b>Σύνδεσμος εδώ</b></a></td>

                        </tr>
                        <tr class="table-secondary">
                            <td scope="row">Η έννοια της συνάρτησης</td>
                            <td><a href="https://www.geogebra.org/m/Jnt9VSmb#material/yDuaW2fM"><b>Σύνδεσμος εδώ</b></a></td>
                        </tr>
                        <tr class="table-success">
                            <td scope="row">Η έννοια της συνάρτησης / Αύξηση </td>
                            <td><a href="https://www.geogebra.org/m/PxV3xZxV#material/s286mkTc"><b>Σύνδεσμος εδώ</b></a></td>
                        </tr>
                        <tr class="table-danger">
                            <td scope="row">Γραφική παράσταση συνάρτησης</td>
                            <td><a href="https://www.geogebra.org/m/Jnt9VSmb#material/KP8G5QJH"><b>Σύνδεσμος εδώ</b></a></td>
                        </tr>
                        <tr class="table-warning">
                            <td scope="row">Η συνάρτηση y = αx</td>
                            <td>
                                <a href="https://www.geogebra.org/m/Jnt9VSmb#material/pJDNzxJ9"><b>Σύνδεσμος (α) εδώ</b></a>
                                <br>
                                <br>
                                <a href="https://www.geogebra.org/m/PxV3xZxV#material/FrvYVVe8"><b>Σύνδεσμος (β) εδώ</b></a>
                            </td>
                        </tr>
                        <tr class="table-info">
                            <td scope="row">Σύγκριση y=αx και y = ax + β</td>
                            <td><a href="https://www.geogebra.org/m/PxV3xZxV#material/TxRgsVRN"><b>Σύνδεσμος εδώ</b></a></td>
                        </tr>
                        <tr>
                            <td scope="row">7. Η συνάρτηση y = αx + β</td>
                            <td><a href="https://www.geogebra.org/m/Jnt9VSmb#material/RR8HwAtR"><b>Σύνδεσμος εδώ</b></a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="line"></div>
        </div>
    </div>





    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <!-- Bootstrap Js CDN -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

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