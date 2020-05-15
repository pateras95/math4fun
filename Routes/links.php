<?php
include('../API/loginCheck.php');
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Χρήσιμα Link</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="../Assets/css/style_sidebar.css">
    <style>
        .header-text {
            font-size: 22px;
        }

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
        <div id="content">

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
                            <li><a href="#">Χρήσιμα Link</a></li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="class-text">
                <h2 style="color:#FDB122">Χρήσιμα Link</h2>
                <p>Παρακάτω θα βρείτε τους χρήσιμους συνδέσμους για online εξάσκηση.</p>
            </div>
            <div class="w-75  center-element">
                <table class="table">
                    <tbody>
                        <tr>
                            <th style="width: 40%" scope="row"> 1. Μαθηματικά Α' Γυμνασίου Διαδραστικό Βιβλίο</th>
                            <td style="width: 60%"><a target="_blank" href="http://ebooks.edu.gr/modules/ebook/show.php/DSGYM-A200/426/2865,10900/">Σύνδεσμος εδώ</a></td>
                        </tr>
                        <tr>
                            <th scope="row"> 2. Μαθηματικά Β' Γυμνασίου Διαδραστικό Βιβλίο</th>
                            <td><a target="_blank" href="http://ebooks.edu.gr/modules/ebook/show.php/DSGYM-B105/386/2552,9945/">Σύνδεσμος εδώ</a></td>
                        </tr>
                        <tr>
                            <th scope="row"> 3. Μαθηματικά Γ' Γυμνασίου Διαδραστικό Βιβλίο</th>
                            <td><a target="_blank" href="http://ebooks.edu.gr/modules/ebook/show.php/DSGYM-C104/470/3109,12498/">Σύνδεσμος εδώ</a></td>
                        </tr>
                        <tr>
                            <th scope="row"> 4. Ελληνική Μαθηματική Εταιρεία</th>
                            <td>
                                <a target="_blank" href="http://www.hms.gr/">Σύνδεσμος εδώ</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="line"></div>

            <div id="meet"></div>
            <script src='https://meet.jit.si/external_api.js'></script>

            fesfse
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

        $(document).ready(function() {
            const domain = 'meet.jit.si';
            const options = {
                roomName: 'math4fun',
                width: 700,
                height: 700,
                parentNode: document.querySelector('#meet')
            };
            const api = new JitsiMeetExternalAPI(domain, options);
        });
    </script>
</body>

</html>