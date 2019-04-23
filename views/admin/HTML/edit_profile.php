﻿<?php require_once 'includes\head.php'; ?>

<!-- Left Sidebar -->
<?php require_once 'includes\left_side.php'; ?>

<!-- Right Sidebar -->
<?php require_once 'includes\rigth_side.php'; ?>

<!-- Chat-launcher -->
<?php require_once 'includes\Chat_launcher.php'; ?>


<section class="content">
    <div class="block-header">
        <div class="row">
            <?php 
           
                    echo AdminC::getMsg('msg'); 
                
                    //getting errors on form
                    $err = AdminC::getMsg('errors');
                  
                    //getting data back which was entered on form
                    $data = AdminC::getMsg('form_data');
                ?>
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2> Edite Profile 
                    
                </h2>


            </div>
            
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <!-- Basic Validation -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                    
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more-vert"></i> </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <form action="<?php echo(URLROOT); ?>/process/p_edit_profile.php" method='POST' enctype="multipart/form-data">

                           

                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control <?php echo(isset($err['username_err'])) ? 'invalid' : ''; ?>"  value="<?php echo($user->username); ?>"  name="username" required="" aria-required="true">
                                    <label class="form-label">Username</label>
                                </div>
                                <span class="invalid-feedback"><?php echo(isset($err['username_err'])) ? $err['username_err'] : ''; ?></span>
                            </div>

                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control <?php echo(isset($err['name_err'])) ? 'invalid' : ''; ?>" name="name" value="<?php echo($user->name); ?>"  required="" aria-required="true">
                                    <label class="form-label">Name</label>
                                </div>
                                <span class="invalid-feedback"><?php echo(isset($err['name_err'])) ? $err['name_err'] : ''; ?></span>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="surname" required="" aria-required="true" value="<?php echo($user->surname); ?>">
                                    <label class="form-label">Surname</label>
                                </div>
                                 <span class="invalid-feedback"><?php echo(isset($err['surname_err'])) ? $err['surname_err'] : ''; ?></span>
                            </div>
                            


                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="email" class="form-control" name="email" required="" aria-required="true" value="<?php echo($user->email);?>" >
                                    <label class="form-label">Email</label>
                                </div>
                                <span class="invalid-feedback"><?php echo(isset($err['email_err'])) ? $err['email_err'] : ''; ?></span>
                            </div>
                            


                        <div class="form-group w-50" id="imageBox" >
                        <img src="<?= URLROOT.'/images/'.$user->image; ?>" alt="" style=" width: 100px;
                                                  height: 100px;
                                                  border-radius: 50%!important;">

                        
                    </div>   
                      
                   <div class="input-file-wrapper" id='imageUpload'>
                            <label for='url'>Click here to upload <sup>*</sup></label>
                        <input type='file' name="image"  class="form-control form-control-lg <?php echo(isset($err['image_err'])) ? 'is-invalid' : ''; ?>"/>
                            <div class="file-remove"></div>
                        </div>

                          
                            <button  name='edit' value='edit' class="btn btn-raised btn-primary waves-effect" type="submit">SUBMIT</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Basic Validation --> 

    </div>
</section>

<!-- Jquery Core Js --> 
<script src="assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 
<script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 

<script src="assets/plugins/jquery-validation/jquery.validate.js"></script> <!-- Jquery Validation Plugin Css --> 
<script src="assets/plugins/jquery-steps/jquery.steps.js"></script> <!-- JQuery Steps Plugin Js --> 

<script src="assets/bundles/mainscripts.bundle.js"></script><!-- Custom Js --> 
<script src="assets/js/pages/forms/form-validation.js"></script> 
</body>
</html>