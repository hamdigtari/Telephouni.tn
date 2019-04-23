<?php require_once /*******/'C:\xampp\htdocs\App\configAdmin.php'; ?>

<!doctype html>
<html class="no-js " lang="en">
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

    <title>:: Admin Login::</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <!-- Custom Css -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/authentication.css">
    <link rel="stylesheet" href="assets/css/color_skins.css">
</head>

  <?php 
                    
                    
                    
                    echo AdminC::getMsg('msg_notify'); 
                
                    //getting errors on form
                    $err = AdminC::getMsg('errors');
                  
                    //getting data back which was entered on form
                    $data = AdminC::getMsg('form_data');
                    
                    
                    ?>

<body class="theme-orange">
<div class="authentication">
    <div class="card">
        <div class="body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header slideDown">
                        <div class="logo"><img src="assets/images/logo-1.png" style=" width: 150px; height: 60px; alt="Telephouni.tn"></div>
                        <h1> Admin</h1>
                        <ul class="list-unstyled l-social">
                            <li><a href="#"><i class="zmdi zmdi-facebook-box"></i></a></li>
                            <li><a href="#"><i class="zmdi zmdi-linkedin-box"></i></a></li>                            
                            <li><a href="#"><i class="zmdi zmdi-twitter"></i></a></li>
                        </ul>
                    </div>                        
                </div>
                <form class="col-lg-12" id="sign_in" action="<?php echo(URLROOT) ?>/process/p_login.php" method='POST'>
                    <h5 class="title">Sign in to your Account</h5>
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" class="form-control"   value="<?php echo($data['username']); ?>"   name="username">
                            <label class="form-label">Username</label>

                        </div>
                        <span class="invalid-feedback"><?php if(isset($err['username_err'])){echo ($err['username_err']); } ?></span>
                    </div>
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="password" value="<?php echo($data['password']); ?>"  name="password"  class="form-control">
                            <label class="form-label">Password</label>
                        </div>
                        <span class="invalid-feedback"><?php if(isset($err['password_err'])){echo ($err['password_err']); }?></span>
                    </div>
                    <div>
                        <input type="checkbox" name="remember-me" id="rememberme" class="filled-in chk-col-cyan">
                        <label for="rememberme" >Remember Me</label>
                    </div>                        
                
                <div class="col-lg-12">
<input type='submit' name='login' value='SIGN IN'  class="btn btn-raised btn-primary waves-effect">
                   
            </form>        
                                        
                </div>
                <div class="col-lg-12 m-t-20">
                    <a class="" href="<?php echo(URLROOT); ?>/forget_password.php">Forgot Password?</a>
                </div>                    
            </div>
        </div>
    </div>
</div>

<!-- Jquery Core Js -->
<script src="assets/bundles/libscripts.bundle.js"></script>    
<script src="assets/bundles/vendorscripts.bundle.js"></script>
<script src="assets/bundles/mainscripts.bundle.js"></script>
</body>
</html>