<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Polaris Livestock | Login</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700i,900,900i&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" type="text/css" href="http://localhost/Skripsi/assets/Template_Account/Template/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="http://localhost/Skripsi/assets/Template_Account/Template/css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="http://localhost/Skripsi/assets/Template_Account/Template/css/iofrm-style.css">
    <link rel="stylesheet" type="text/css" href="http://localhost/Skripsi/assets/Template_Account/Template/css/iofrm-theme1.css">
</head>
<body>
    <div class="form-body" class="container-fluid">
        <div class="website-logo">
          <p>Polaris Livestock.</p>
        </div>
        <div class="row">
            <div class="img-holder">
                <div class="bg"></div>
                <div class="info-holder">

                </div>
            </div>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Polaris Livestock.</h3>
                        <p style="font-family: 'Roboto', sans-serif;">Enter Credentials to Manage Operational System</p>
                        <div class="page-links">
                            <a href="<?php echo base_url(). 'c_login/login' ?>" class="active" style="font-family: 'Roboto', sans-serif;">Login</a>
                            <a href="<?php echo base_url(). 'c_login/sign_up' ?>"style="font-family: 'Roboto', sans-serif;">Register</a>
                        </div>
                        <form action ="<?php echo base_url(). 'c_login/proses_login' ?>" method = "post">
                            <input class="form-control" type="text" name="email" placeholder="E-mail Address" required>
                            <input class="form-control" type="password" name="password" placeholder="Password" required>
                            <div class="form-button">
                                <button id="submit" type="submit" class="ibtn" style="font-family: 'Roboto', sans-serif;"><b>LOGIN</b></button>
                            </div>
                        </form>
                        <div class="other-links">
                            <span>Don't Have An Account?</span><a href="<?php echo base_url(). 'c_login/sign_up' ?>"style="font-family: 'Roboto', sans-serif;">SIGN UP</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script type="text/javascript" src="http://localhost/Skripsi/assets/Template_Account/Template/js/jquery.min.js"></script>
<script type="text/javascript" src="http://localhost/Skripsi/assets/Template_Account/Template/js/popper.min.js"></script>
<script type="text/javascript" src="http://localhost/Skripsi/assets/Template_Account/Template/js/bootstrap.min.js"></script>
<script type="text/javascript" src="http://localhost/Skripsi/assets/Template_Account/Template/js/main.js"></script>
</body>
</html>