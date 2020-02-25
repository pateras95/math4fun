<?php
include('../API/login.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style type="text/css">
            body{
                background-image: url("../Assets/Images/background.png");
            }
            .vertical-align {
                display: flex;
                align-items: center;
                margin-bottom: 0;
           }
            .wrapper{
                width: 450px;
                padding: 20px;
                margin-top: 150px;
                border:3px solid gray;
                border-radius: 10px;
                background: #D8BFD8;
                box-shadow: 4px 4px 5px 0px rgba(0,0,0,0.75);
            }
            .error-text{
                color:red;
                font-size: 12px;
                font-family: Arial, Helvetica, sans-serif;
                font-weight: bold;
            }

            .title-text{
                font-family: Arial, Helvetica, sans-serif;
                font-size: 25px;
                text-align:center;
                color: black;
                font-weight: bold;
            }
            .sub-text{
                font-family: Arial, Helvetica, sans-serif;
                font-size: 12px;
                text-align:center;
                margin-bottom: 15px;
                color:black;
            }
            .label-text{
                font-family: Arial, Helvetica, sans-serif;
                font-size: 15px;
                color:black;
                font-weight: bold;
            }
            .container {
                display: flex;
                align-items: center;
                justify-content: center;
            }
            .sumbit-button{
                background:white;
                color:black;
                font-family: Arial, Helvetica, sans-serif;
                font-size: 15px;
                font-weight: bold;
                border:none;
            }
            .sumbit-button:hover{;
                background:#251c2e;
                color:white;
                font-family: Arial, Helvetica, sans-serif;
                font-size: 15px;
                font-weight: bold;
                border:none;
                box-shadow: 4px 4px 5px 0px rgba(0,0,0,0.75);
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="wrapper">
                <div class="title-text">Σύνδεση</div>
                <div class="sub-text">Παρακαλώ συμπληρώστε τα στοιχεία σας για να συνδεθείτε.</div>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                        <div class="row vertical-align">
                            <div class="col-4"><label class="label-text">Όνομα Χρήστη</label></div>
                            <div class="col-8"><input type="text" name="username" class="form-control" value=""></div>
                        </div>
                        <div class="row">
                            <div class="col-4"></div>
                            <div class="col-8"><span class="error-text"><?php echo $username_err; ?></span></div>
                        </div>
                    </div>
                    <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                        <div class="row vertical-align">
                            <div class="col-4"><label class="label-text">Κωδικός</label></div>
                            <div class="col-8"><input type="password" name="password" class="form-control"></div>
                        </div>
                        <div class="row">
                            <div class="col-4"></div>
                            <div class="col-8"> <span class="error-text"><?php echo $password_err; ?></span></div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-4"></div>
                        <div class="col-8 text-center"><input type="submit" class="btn btn-primary sumbit-button" value="Σύνδεση"></div>
                    </div>
                    <div class="row">
                        <div class="col-3"></div>
                        <div class="col-9 text-center"><p>Δεν έχετε λογαριασμό; <a href="./registerRoute.php"><b>Εγγραφή εδώ</b></a>.</p></div>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>