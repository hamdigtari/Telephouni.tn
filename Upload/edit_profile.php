<?php require_once 'config.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no, minimal-ui"/>
    
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Questrial|Raleway:700,900" rel="stylesheet">

    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="css/bootstrap.extension.css" rel="stylesheet" type="text/css" />
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link href="css/swiper.css" rel="stylesheet" type="text/css" />
    <link href="css/sumoselect.css" rel="stylesheet" type="text/css" />
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />

    <link rel="shortcut icon" href="img/favicon.ico" />
    <title>EX ZO</title>
</head>
<body>

    <!-- LOADER -->
    <div id="loader-wrapper"></div>

    <div id="content-block">


        <!-- HEADER -->
        <?php require_once 'includes/header.php'; ?>


        

        <div class="header-empty-space"></div>
 <div class="popup-align">
     <?php 
           
                    echo ClientsC::getMsg('msg'); 
                
                    //getting errors on form
                    $err = ClientsC::getMsg('errors');
                  
                    //getting data back which was entered on form
                    $data = ClientsC::getMsg('form_data');
                ?>
                    <h3 class="h3 text-center">edit profile</h3>
                  <form action="<?php echo(URLROOT); ?>/process/p_edit_profile.php" method='POST' enctype="multipart/form-data">
                    <div class="empty-space col-xs-b30"></div>


                    <input class="simple-input <?php echo(isset($err['name_err'])) ? 'invalid' : ''; ?>" type="text" value="<?php echo($user->name); ?>" placeholder="Your name" name="name"/>
                    <span class="invalid-feedback"><?php echo(isset($err['name_err'])) ? $err['name_err'] : ''; ?></span>


                    <div class="empty-space col-xs-b10 col-sm-b20"></div>


                    <input class="simple-input <?php echo(isset($err['surname_err'])) ? 'invalid' : ''; ?>" type="text" value="<?php echo($user->surname); ?>" placeholder="Your surname" name="surname"/>
                    <span class="invalid-feedback"><?php echo(isset($err['surname_err'])) ? $err['surname_err'] : ''; ?></span>


                    <div class="empty-space col-xs-b10 col-sm-b20"></div>


                    <input class="simple-input <?php echo(isset($err['username_err'])) ? 'invalid' : ''; ?>" type="text" value="<?php echo($user->username);; ?>" placeholder="Your username" name="username"/>
                    <span class="invalid-feedback"><?php echo(isset($err['username_err'])) ? $err['username_err'] : ''; ?></span>


                    <div class="empty-space col-xs-b10 col-sm-b20"></div>


                    <input type="text" class="simple-input <?php echo(isset($err['email_err'])) ? 'invalid' : ''; ?>"  value="<?php echo($user->email);?>" placeholder="Your email" name="email" />
                    <span class="invalid-feedback"><?php echo(isset($err['email_err'])) ? $err['email_err'] : ''; ?></span>


                    <div class="empty-space col-xs-b10 col-sm-b20"></div>


                   


 <div class="form-group w-50" id="imageBox" >
                        <img src="<?= URLROOT.'/images/'.$user->image; ?>" alt="" style=" width: 100px;
                                                  height: 100px;
                                                  border-radius: 50%!important;">

                        
                    </div>   
                      
                  

                   <div class="input-file-wrapper" id='imageUpload'>
                            <label for='url'>Click here to upload <sup>*</sup></label>
                        <input type='file' name="image"  class="form-control form-control-lg <?php echo(isset($err['image_err'])) ? 'is-invalid' : ''; ?>"/>
                         <span class="invalid-feedback"><?php echo($err['image_err']); ?></span>
                            <div class="file-remove"></div>
                        </div>



                    <div class="empty-space col-xs-b10 col-sm-b20"></div>
                    <div class="col-sm-2 text-right">
                            
                            <a class="simple-link" href="<?= URLROOT.'/change_password.php' ?>"> Change your password</a>
                        </div>
                    <div class="row">

                        
                        <div class="col-sm-5 text-right">
                            <a class="button size-2 style-3" href="#">
                                <input type='submit' name='edit' value='edit' class='btn  btn-block color-set'>
                                <span class="button-wrapper">
                                    <span class="icon"><img src="img/icon-4.png" alt="" /></span>
                                    <span class="text">submit</span>
                                </span>
                            </a>  
                        </div>
                    </div>
                       
               

                    
         </form>
 </div>

        <div class="empty-space col-xs-b35 col-md-b70"></div>
       





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
