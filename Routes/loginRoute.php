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
            }

            .title-text{
                font-family: Arial, Helvetica, sans-serif;
                font-size: 25px;  
                text-align:center;
                color: black;
            }
            
            .sub-text{
                font-family: Arial, sans-serif;
                font-size: 12px;
                text-align:center;
                margin-bottom: 15px;
                color:black;
            }
            
            .label-text{
                font-family: Arial, sans-serif;
                font-size: 15px;
                color:black;
            }

            .container {
                display: flex;
                align-items: center;
                justify-content: center;
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
                            <span class="help-block"><?php echo $username_err; ?></span>
                        </div>
                    </div>
                    <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                        <div class="row vertical-align">
                            <div class="col-4"><label class="label-text">Κωδικός</label></div>
                            <div class="col-8"><input type="password" name="password" class="form-control"></div>
                            <span class="help-block"><?php echo $password_err; ?></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Login">
                    </div>
                    <p>Don't have an account? <a href="./registerRoute.php">Sign up now</a>.</p>
                </form>
            </div>
        </div>
    </body>
</html>