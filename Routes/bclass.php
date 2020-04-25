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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="../Assets/css/style_sidebar.css">

    <style>
    .class-text {
        text-align: center;
    }

    .center-element {
        margin: auto;
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
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false"
                        aria-controls="pageSubmenu">Τάξεις</a>
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
                            <li><a href="#">Μαθηματικά B΄ Γυμνασίου</a></li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="class-text">
                <h2 style="color:#FDB122">Άλγεβρα B΄ Γυμνασίου</h2>
                <p>Παρακάτω θα βρείτε τα τελευταία φυλάδια της άγλεβρας.</p>
            </div>
            <iframe src="https://drive.google.com/embeddedfolderview?id=1LUFxDSBUw7NCjl4Wbl-BckdY9mtG3NpA#grid"
                style="width:100%; height:300px; border:0"></iframe>
            <div class="line"></div>

            <div class="class-text">
                <h2 style="color:#FDB122">Γεωμετρία B΄ Γυμνασίου</h2>
                <p>Παρακάτω θα βρείτε τα τελευταία φυλάδια της γεωμετρίας.</p>
            </div>
            <iframe src="https://drive.google.com/embeddedfolderview?id=1gwxG3DrKfpTlTQHsC-rxd9nAAwLd-B1l#grid"
                style="width:100%; height:300px; border:0"></iframe>
            <div class="line"></div>

            <div class="class-text">
                <h2 style="color:#FDB122">Επαναληπτικά B΄ Γυμνασίου</h2>
                <p>Παρακάτω θα βρείτε τα τελευταία επαναληπτικά φυλάδια .</p>
            </div>
            <iframe src="https://drive.google.com/embeddedfolderview?id=1sbGhRRS6PN-XtfzXvAsN1_XGhFKT7feY#grid"
                style="width:100%; height:300px; border:0"></iframe>
            <div class="line"></div>

            <div class="class-text">
                <h2 style="color:#FDB122">Σύνδεσμοι B΄ Γυμνασίου (Άλγεβρα)</h2>
                <p>Παρακάτω θα βρείτε τους συνδέσμους για online εξάσκηση.</p>
            </div>
            <div class="w-75  center-element">
                <table class="table">
                    <tbody>
                        <tr>
                            <th scope="row"> 1. Δυνάμες Πραγματικών Αριθμών</th>
                            <td><a target="_blank"
                                    href="http://www.e-maths.gr/online_test/deinameis_test_bgymn/index.html">Σύνδεσμος
                                    εδώ</a></td>

                        </tr>
                        <tr>
                            <th scope="row"> 2. Εφαρμογή στην επίλυση εξίσωσης</th>
                            <td><a target="_blank"
                                    href="http://www.e-maths.gr/Bgymn_math_potatoes/Alg_Kef1/Bgym_Alg1_2a/ejis_bimata.htm">Σύνδεσμος
                                    εδώ</a></td>

                        </tr>
                        <tr>
                            <th scope="row"> 3. Εξίσωση και απαλοιφή παρονομαστών</th>
                            <td><a target="_blank"
                                    href="http://www.e-maths.gr/Bgymn_math_potatoes/Alg_Kef1/Bgym_Alg1_2b/ejisosi_mutch.htm">Σύνδεσμος
                                    εδώ</a></td>

                        </tr>
                        <tr>
                            <th style="width: 40%" scope="row"> 4. Συντεταγμένες σημείου</th>
                            <td style="width: 60%"><a target="_blank"
                                    href="https://www.geogebra.org/m/Jnt9VSmb#material/VUnV62vT">Σύνδεσμος εδώ</a></td>
                        </tr>
                        <tr>
                            <th scope="row"> 5. Η έννοια της συνάρτησης</th>
                            <td><a target="_blank"
                                    href="https://www.geogebra.org/m/Jnt9VSmb#material/yDuaW2fM">Σύνδεσμος εδώ</a></td>
                        </tr>
                        <tr>
                            <th scope="row"> 6. Η έννοια της συνάρτησης / Αύξηση </th>
                            <td><a target="_blank"
                                    href="https://www.geogebra.org/m/PxV3xZxV#material/s286mkTc">Σύνδεσμος εδώ</a></td>
                        </tr>
                        <tr>
                            <th scope="row"> 7. Γραφική παράσταση συνάρτησης</th>
                            <td><a target="_blank"
                                    href="https://www.geogebra.org/m/Jnt9VSmb#material/KP8G5QJH">Σύνδεσμος εδώ</a></td>
                        </tr>
                        <tr>
                            <th scope="row"> 8. Η συνάρτηση y = αx</th>
                            <td>
                                <a target="_blank"
                                    href="https://www.geogebra.org/m/Jnt9VSmb#material/pJDNzxJ9">Σύνδεσμος (α) εδώ</a>
                                <br>
                                <br>
                                <a target="_blank"
                                    href="https://www.geogebra.org/m/PxV3xZxV#material/FrvYVVe8">Σύνδεσμος (β) εδώ</a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row"> 9. Σύγκριση y=αx και y = ax + β</th>
                            <td><a target="_blank"
                                    href="https://www.geogebra.org/m/PxV3xZxV#material/TxRgsVRN">Σύνδεσμος εδώ</a></td>
                        </tr>
                        <tr>
                            <th scope="row"> 10. Η συνάρτηση y = αx + β</th>
                            <td><a target="_blank"
                                    href="https://www.geogebra.org/m/Jnt9VSmb#material/RR8HwAtR">Σύνδεσμος εδώ</a></td>
                        </tr>
                        <tr>
                            <th scope="row"> 11. Ερωτήσεις Κατανόησησης ανά κεφάλαιο</th>
                            <td><a target="_blank"
                                    href="http://www.e-maths.gr/online_test/g_gymn_app3/index.html">Σύνδεσμος εδώ</a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row"> 12. Ερωτήσεις Κατανόησησης ανά κεφάλαιο (για κινητό)</th>
                            <td><a target="_blank"
                                    href="http://www.e-maths.gr/online_test/g_gymn_app3/ismplayer.html">Σύνδεσμος
                                    εδώ</a></td>

                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="line"></div>

            <div class="class-text">
                <h2 style="color:#FDB122">Σύνδεσμοι B΄ Γυμνασίου (Γεωμετρία)</h2>
                <p>Παρακάτω θα βρείτε τους συνδέσμους για online εξάσκηση.</p>
            </div>
            <div class="w-75 center-element">
                <table class="table">
                    <tbody>
                        <tr>
                            <th style="width: 40%" scope="row"> 1. Εγγεγραμμένες γωνίες</th>
                            <td style="width: 60%">
                                <a target="_blank"
                                    href="https://www.geogebra.org/m/PxV3xZxV#material/WE2fNZ22">Σύνδεσμος (α) εδώ</a>
                                <br>
                                <br>
                                <a target="_blank"
                                    href="https://www.geogebra.org/m/Jnt9VSmb#material/jgMrJwQd">Σύνδεσμος (β) εδώ</a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row"> 2. Κανονικά Πολύγωνα</th>
                            <td>
                                <a target="_blank"
                                    href="https://www.geogebra.org/m/PxV3xZxV#material/fYkuWMpe">Σύνδεσμος (α) εδώ</a>
                                <br>
                                <br>
                                <a target="_blank" href="https://www.geogebra.org/m/kW7RqP7M">Σύνδεσμος (β) εδώ</a>
                                <br>
                                <br>
                                <a target="_blank" href="https://www.geogebra.org/m/qzt6xATP">Σύνδεσμος (γ) εδώ. Σωστό ή
                                    Λάθος</a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row"> 3. Mήκος κύκλου</th>
                            <td>
                                <a target="_blank"
                                    href="https://www.geogebra.org/m/PxV3xZxV#material/pMzjexkY">Σύνδεσμος (α) εδώ</a>
                                <br>
                                <br>
                                <a target="_blank"
                                    href="https://www.geogebra.org/m/Jnt9VSmb#material/uPpy88fv">Σύνδεσμος (β) εδώ</a>
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
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>

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