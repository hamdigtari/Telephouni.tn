<?php require_once 'includes\head.php'; ?>

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
           
                    echo ClientsC::getMsg('msg'); 
                
                    //getting errors on form
                    $err = ClientsC::getMsg('errors');
                  
                    //getting data back which was entered on form
                    $data = ClientsC::getMsg('form_data');
                ?>
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>Update User Profile By Id
                    
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
                       <form action="<?php echo(URLROOT) ?>/process/p_register.php" method='POST'>

                           

                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="username" required="" aria-required="true">
                                    <label class="form-label">Username</label>
                                </div>
                            </div>

                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="name" required="" aria-required="true">
                                    <label class="form-label">Name</label>
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="surname" required="" aria-required="true">
                                    <label class="form-label">Surname</label>
                                </div>
                            </div>
                            


                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="email" class="form-control" name="email" required="" aria-required="true">
                                    <label class="form-label">Email</label>
                                </div>
                            </div>


                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="password" class="form-control" name="password" required="" aria-required="true">
                                    <label class="form-label">Password</label>
                                </div>
                            </div>


                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="password" class="form-control" name="confirm_password"required="" aria-required="true">
                                    <label class="form-label">Confirm Password</label>
                                </div>
                            </div>
                            



                          
                            <button  name='register' value='Register' class="btn btn-raised btn-primary waves-effect" type="submit">SUBMIT</button>
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