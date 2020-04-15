<?php
include('../API/login.php');
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Αρχική</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="../Assets/css/style_sidebar.css">

    <style>
        .header-text {
            font-size: 22px;
        }
        .login-button{
            border: none;
            width:150px;
            background: #FDB122;
            color: black;
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
        </nav>

        <!-- Page Content Holder -->
        <div id="content">

        <div style="padding-top: 12%;" >
            <div class="w3-content w3-container" id="contact">
                <h3 class="w3-center">Σύνδεση</h3>
                <p class="w3-center"><em>Παρακάτω μπορείτε να συνδεθήτε στην σελίδα είτε με τον
                        λογαριασμο σας είτε με τον λογαριασμό σας απο το Facebook.</em></p> 
            </div>

            <form class="w3-center pure-form pure-form-aligned" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <fieldset>
                        <div class="pure-control-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                            <label for="name">Όνομα Χρήστη : </label>
                            <input name="username" type="text" placeholder="">
                            <div><span class="error-text"><?php echo $username_err; ?></span></div>
                        </div>

                        <div class="pure-control-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                            <label for="password">Κωδικός : </label>
                            <input name="password" type="password" placeholder="">
                            <div> <span class="error-text"><?php echo $password_err; ?></span></div>
                        </div>

                        <div class="pure-controls">
                            <input type="submit" class="btn btn-primary login-button" value="Σύνδεση"></div>
                        </div>
                    </fieldset>
                </form>


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