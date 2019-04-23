<?php require_once 'includes\head.php'; ?>
<body>

    <!-- LOADER -->
    <div id="loader-wrapper"></div>

    <div id="content-block">


        <!-- HEADER -->
        <?php require_once 'includes/header.php'; ?>


        

        <div class="header-empty-space"></div>
   <div class="popup-align">


                    <?php 
                    
                    
                    
                    echo ClientsC::getMsg('msg_notify'); 
                
                    //getting errors on form
                    $err = ClientsC::getMsg('errors');
                  
                    //getting data back which was entered on form
                    $data = ClientsC::getMsg('form_data');
                    
                    
                    ?>



                    <h3 class="h3 text-center">Log in</h3>
<form action="<?php echo(URLROOT) ?>/process/p_login.php" method='POST'>

                    <div class="empty-space col-xs-b30"></div>
                    <input class="simple-input <?php if(isset($err['username_err'])){ echo 'invalid'; } ?>" type="text" value="<?php echo($data['username']); ?>"  placeholder="Your username"  name="username"/>
                    <span class="invalid-feedback"><?php if(isset($err['username_err'])){echo ($err['username_err']); } ?></span>
                    <div class="empty-space col-xs-b10 col-sm-b20"></div>
                    <input class="simple-input <?php echo(isset($err['password_err'])) ? 'invalid' : ''; ?>" type="password" value="<?php echo($data['password']); ?>" placeholder="Enter password" name="password" />
                    <span class="invalid-feedback"><?php if(isset($err['password_err'])){echo ($err['password_err']); }?></span>
                    <div class="empty-space col-xs-b10 col-sm-b20"></div>
                    <div class="row">
                        <div class="col-sm-6 col-xs-b10 col-sm-b0">
                            <div class="empty-space col-sm-b5"></div>
                            <a class="simple-link" href="<?php echo(URLROOT); ?>/forget_password.php">Forgot password?</a>
                            <div class="empty-space col-xs-b5"></div>
                            <a class="simple-link" href="<?php echo(URLROOT); ?>/register.php">register now</a>
                            

                        </div>

                        <div class="col-sm-6 text-right">
                            <label class="checkbox-entry">
                            <input type="checkbox" name="remember-me"><span>Remember me</span>
                        </label>
                        </div>

                        

                           <a class="button size-2 style-3" href="#">
                            <input type='submit' name='login' value='Login' class='btn  btn-block color-set'>
                                <span class="button-wrapper">
                                    <span class="icon"><img src="img/icon-4.png" alt="" /></span>
                                    <span class="text">submit</span>
                                </span>
                            </a>  
                    </div>
                    <div class="popup-or">
                        <span>or</span>
                    </div>
                    <div class="row m5">
                        <div class="col-sm-4 col-xs-b10 col-sm-b0">
                            <a class="button facebook-button size-2 style-4 block" href="#">
                                <span class="button-wrapper">
                                    <span class="icon"><img src="img/icon-4.png" alt="" /></span>
                                    <span class="text">facebook</span>
                                </span>
                            </a>
                        </div>
                        <div class="col-sm-4 col-xs-b10 col-sm-b0">
                            <a class="button twitter-button size-2 style-4 block" href="#">
                                <span class="button-wrapper">
                                    <span class="icon"><img src="img/icon-4.png" alt="" /></span>
                                    <span class="text">twitter</span>
                                </span>
                            </a>
                        </div>
                        <div class="col-sm-4">
                            <a class="button google-button size-2 style-4 block" href="#">
                                <span class="button-wrapper">
                                    <span class="icon"><img src="img/icon-4.png" alt="" /></span>
                                    <span class="text">google+</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
        <div class="empty-space col-xs-b35 col-md-b70"></div>
       
</form>




       <div class="container">
            <a class="client-logo-entry">
                <img src="img/client-logo-1.jpg" alt="" />
                <img src="img/client-logo-1.jpg" alt="" />
            </a>
            <a class="client-logo-entry">
                <img src="img/client-logo-2.jpg" alt="" />
                <img src="img/client-logo-2.jpg" alt="" />
            </a>
            <a class="client-logo-entry">
                <img src="img/client-logo-3.jpg" alt="" />
                <img src="img/client-logo-3.jpg" alt="" />
            </a>
            <a class="client-logo-entry">
                <img src="img/client-logo-4.jpg" alt="" />
                <img src="img/client-logo-4.jpg" alt="" />
            </a>
            <a class="client-logo-entry">
                <img src="img/client-logo-5.jpg" alt="" />
                <img src="img/client-logo-5.jpg" alt="" />
            </a>
            <a class="client-logo-entry">
                <img src="img/client-logo-6.jpg" alt="" />
                <img src="img/client-logo-6.jpg" alt="" />
            </a>
            <a class="client-logo-entry">
                <img src="img/client-logo-7.jpg" alt="" />
                <img src="img/client-logo-7.jpg" alt="" />
            </a>
            <a class="client-logo-entry">
                <img src="img/client-logo-8.jpg" alt="" />
                <img src="img/client-logo-8.jpg" alt="" />
            </a>
            <a class="client-logo-entry">
                <img src="img/client-logo-9.jpg" alt="" />
                <img src="img/client-logo-9.jpg" alt="" />
            </a>
            <a class="client-logo-entry">
                <img src="img/client-logo-10.jpg" alt="" />
                <img src="img/client-logo-10.jpg" alt="" />
            </a>
        </div>


        <div class="empty-space col-xs-b35 col-md-b70"></div>
        <div class="empty-space col-xs-b35 col-md-b70"></div>

        <div class="footer-form-block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-xs-b10 col-lg-b0">
                        <div class="cell-view empty-space col-lg-b50">
                            <h3 class="h3 light">dont miss your chance</h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-xs-b10 col-lg-b0">
                        <div class="cell-view empty-space col-lg-b50">
                            <div class="simple-article size-3 light transparent">ONLY 200 PROMO CODES!</div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-line-form">
                            <input class="simple-input light" type="text" value="" placeholder="Your email">
                            <div class="button size-2 style-1">
                                <span class="button-wrapper">
                                    <span class="icon"><img src="img/icon-1.png" alt=""></span>
                                    <span class="text">submit</span>
                                </span>
                                <input type="submit" value="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- FOOTER -->
        
<?php require_once 'includes/footer.php'; ?>

    </div>

    
<?php require_once 'includes/singpop.php'; ?>

    <script src="js/jquery-2.2.4.min.js"></script>
    <script src="js/swiper.jquery.min.js"></script>
    <script src="js/global.js"></script>

    <!-- styled select -->
    <script src="js/jquery.sumoselect.min.js"></script>

    <!-- counter -->
    <script src="js/jquery.classycountdown.js"></script>
    <script src="js/jquery.knob.js"></script>
    <script src="js/jquery.throttle.js"></script>

</body>
</html>
