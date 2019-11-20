<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iofrm</title>
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
                        <p>Create Account To Access Internal Operational System</p>
                        <div class="page-links">
                            <a href="<?php echo base_url() . 'c_login/login' ?>" style="font-family: 'Roboto', sans-serif;">Login</a>
                            <a href="<?php echo base_url() . 'c_login/sign_up' ?>" class="active" style="font-family: 'Roboto', sans-serif;">Register</a>
                        </div>
                        <form action="<?php echo base_url() . 'c_login/InsertAdmin' ?>" method="post">
                            <input class="form-control" type="text" name="fname" placeholder="First Name" required>
                            <input class="form-control" type="text" name="lname" placeholder="Last Name" required>
                            <select class="form-control" name="gender" required style="margin-bottom:15px">
                                <option>Male</option>
                                <option>Female</option>
                            </select>
                            <input class="form-control" type="email" name="email" placeholder="E-mail Address" required>
                            <input class="form-control" type="password" name="password" placeholder="Password" required>
                            <input class="form-control" type="number" name="phone" placeholder="Phone Number" required>
                            <input class="form-control" type="text" name="address" placeholder="Address" required>
                            <input class="form-control" type="text" name="city" placeholder="City" required>
                            <input class="form-control" type="text" name="postcode" placeholder="Postcode" required>
                            <input class="form-control" type="text" name="state" placeholder="State" required>
                            <input class="form-control" type="file" name="photo" placeholder="Profile Picture" required>
                            

                            <div class="form-button">
                                <button id="submit" type="submit" class="ibtn">REGISTER</button>
                            </div>
                        </form>
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