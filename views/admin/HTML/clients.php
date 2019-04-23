<?php require_once /*******/'C:\xampp\htdocs\App\configAdmin.php'; ?>
<!doctype html>
<html class="no-js " lang="en">
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

    <title>:: Nexa Bootstrap 4 Admin::</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <!-- Font Icon -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    <!-- Custom Css -->
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/inbox.css">
    <link rel="stylesheet" href="assets/css/color_skins.css">
</head>

<body class="theme-cyan">
<!-- Page Loader -->
<div class="page-loader-wrapper">
<div class="loader">        
    <div class="line"></div>
    <div class="line"></div>
    <div class="line"></div>
    <p>Please wait...</p>
    <div class="m-t-30"><img src="assets/images/logo.svg" width="48" height="48" alt="Nexa"></div>
</div>
</div>

<!-- Overlay For Sidebars -->
<div class="overlay"></div>

<!-- Search  -->
<div class="search-bar">
    <div class="search-icon">
        <i class="material-icons">search</i>
    </div>
    <input type="text" placeholder="Explore Nexa...">
    <div class="close-search">
        <i class="material-icons">close</i>
    </div>
</div>

<!-- Top Bar -->
<nav class="navbar">
    <div class="col-12">

        <div class="navbar-header">
            <a href="javascript:void(0);" class="bars"></a>
            <a class="navbar-brand" href="index.html">Nexa</a>
        </div>

        <ul class="nav navbar-nav navbar-left">
            <li><a href="javascript:void(0);" class="ls-toggle-btn" data-close="true"><i class="zmdi zmdi-swap"></i></a></li>
            <li><a href="index.html" class="inbox-btn hidden-sm-down" data-close="true"><i class="zmdi zmdi-home"></i></a></li>
            <li class="dropdown menu-app hidden-sm-down"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button"> <i class="zmdi zmdi-apps"></i> </a>
                <ul class="dropdown-menu slideDown">
                    <li class="body">
                        <ul class="menu">
                            <li><a href="blog-dashboard.html"><i class="zmdi zmdi-blogger"></i><span>Blog</span></a></li>
                        <li><a href="contact.html"><i class="zmdi zmdi-accounts-list"></i><span>Contacts</span></a></li>
                        <li><a href="chat.html"><i class="zmdi zmdi-comment-text"></i><span>Chat</span></a></li>
                        <li><a href="javascript:void(0)"><i class="zmdi zmdi-arrows"></i><span>Notes</span></a></li>
                        <li><a href="javascript:void(0)"><i class="zmdi zmdi-view-column"></i><span>Taskboard</span></a></li>
                        <li><a href="events.html"><i class="zmdi zmdi-calendar-note"></i><span>Calendar</span></a></li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="zmdi zmdi-search"></i></a></li>
            <li class="dropdown">
                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                    <i class="zmdi zmdi-notifications"></i>
                    <div class="notify">
                        <span class="heartbit"></span>
                        <span class="point"></span>
                    </div>
                </a>
                <ul class="dropdown-menu slideDown">
                    <li class="header">NOTIFICATIONS</li>
                    <li class="body">
                        <ul class="menu list-unstyled">
                            <li>
                                <a href="javascript:void(0);">
                                    <div class="icon-circle l-coral">
                                        <i class="material-icons">person_add</i>
                                    </div>
                                    <div class="menu-info">
                                        <h4>12 new members joined</h4>
                                        <p>
                                            <i class="material-icons">access_time</i> 14 mins ago </p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <div class="icon-circle l-turquoise">
                                        <i class="material-icons">add_shopping_cart</i>
                                    </div>
                                    <div class="menu-info">
                                        <h4>4 sales made</h4>
                                        <p>
                                            <i class="material-icons">access_time</i> 22 mins ago </p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <div class="icon-circle g-bg-cyan">
                                        <i class="material-icons">delete_forever</i>
                                    </div>
                                    <div class="menu-info">
                                        <h4>
                                            <b>Nancy Doe</b> deleted account</h4>
                                        <p>
                                            <i class="material-icons">access_time</i> 3 hours ago </p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <div class="icon-circle g-bg-blue">
                                        <i class="material-icons">mode_edit</i>
                                    </div>
                                    <div class="menu-info">
                                        <h4>
                                            <b>Nancy</b> changed name</h4>
                                        <p>
                                            <i class="material-icons">access_time</i> 2 hours ago </p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <div class="icon-circle l-slategray">
                                        <i class="material-icons">comment</i>
                                    </div>
                                    <div class="menu-info">
                                        <h4>
                                            <b>John</b> commented your post</h4>
                                        <p>
                                            <i class="material-icons">access_time</i> 4 hours ago </p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <div class="icon-circle l-seagreen">
                                        <i class="material-icons">cached</i>
                                    </div>
                                    <div class="menu-info">
                                        <h4>
                                            <b>John</b> updated status</h4>
                                        <p>
                                            <i class="material-icons">access_time</i> 3 hours ago </p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <div class="icon-circle l-blue">
                                        <i class="material-icons">settings</i>
                                    </div>
                                    <div class="menu-info">
                                        <h4>Settings updated</h4>
                                        <p>
                                            <i class="material-icons">access_time</i> Yesterday </p>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="footer">
                        <a href="javascript:void(0);">View All Notifications</a>
                    </li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                    <i class="zmdi zmdi-flag"></i>
                    <div class="notify">
                        <span class="heartbit"></span>
                        <span class="point"></span>
                    </div>
                </a>
                <ul class="dropdown-menu slideDown">
                    <li class="header">TASKS</li>
                    <li class="body">
                        <ul class="menu tasks list-unstyled">
                            <li>
                                <a href="javascript:void(0);">
                                    <h4> Footer display issue
                                        <small>72%</small>
                                    </h4>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"
                                            style="width: 68%;"></div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <h4> Make new buttons
                                        <small>56%</small>
                                    </h4>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="56" aria-valuemin="0" aria-valuemax="100"
                                            style="width: 68%;"></div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <h4> Create new dashboard
                                        <small>68%</small>
                                    </h4>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped" role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100"
                                            style="width: 68%;"></div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <h4> Solve transition issue
                                        <small>77%</small>
                                    </h4>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100"
                                            style="width: 68%;"></div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <h4> Answer GitHub questions
                                        <small>87%</small>
                                    </h4>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100" style="width: 68%;"></div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="footer">
                        <a href="javascript:void(0);">View All Tasks</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="sign-in.html" class="mega-menu" data-close="true">
                    <i class="zmdi zmdi-power"></i>
                </a>
            </li>
            <li class="">
                <a href="javascript:void(0);" class="js-right-sidebar" data-close="true">
                    <i class="zmdi zmdi-settings zmdi-hc-spin"></i>
                </a>
            </li>
        </ul>
    </div>
</nav>

<!-- Left Sidebar -->
<?php require_once 'includes\left_side.php'; ?>

<!-- Right Sidebar -->
<?php require_once 'includes\rigth_side.php'; ?>

<!-- Chat-launcher -->
<?php require_once 'includes\Chat_launcher.php'; ?>


<section class="content inbox">
    <div class="container-fluid">
        <div class="card">
            <div class="row bg-white">
                <div class="col-lg-1 col-md-2 col-3">
                    <div class="checkbox m-t-20 m-l-15">
                        <input type="checkbox" id="basic_checkbox_0">
                        <label for="basic_checkbox_0"></label>
                    </div>
                </div>
                <div class="col-lg-4 col-md-3 hidden-sm-down">
                    <div class="input-group m-t-10"> <span class="input-group-addon"> <i class="zmdi zmdi-search"></i></span>
                        <div class="form-line">
                            <input type="text" class="form-control" placeholder="Search...">
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-7 col-9 text-right">                    
                    <div class="btn-group" role="group">
                        <button type="button" class="btn btn-default waves-effect col-green"><i class="zmdi zmdi-archive"></i></button>
                        <button type="button" class="btn btn-default waves-effect col-amber"><i class="zmdi zmdi-alert-circle"></i></button>
                        <button type="button" class="btn btn-default waves-effect col-red"><i class="zmdi zmdi-delete"></i></button>                        
                    </div>
                    <div class="btn-group hidden-sm-down" role="group">
                        <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle text-muted" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-folder"></i> <span class="caret"></span> </button>
                            <ul class="dropdown-menu">
                                <li><a href="javascript:void(0);">Important</a></li>
                                <li><a href="javascript:void(0);">Social</a></li>
                                <li><a href="javascript:void(0);">Bank Statements</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="javascript:void(0);">Create a folder</a></li>
                            </ul>
                        </div>
                        <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle text-muted" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-label"></i> <span class="caret"></span> </button>
                            <ul class="dropdown-menu">
                                <li><a href="javascript:void(0);">Family</a></li>
                                <li><a href="javascript:void(0);">Work</a></li>
                                <li><a href="javascript:void(0);">Google</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="javascript:void(0);">Create a Label</a></li>
                            </ul>
                        </div>
                        <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle text-muted" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> <span class="caret"></span> </button>
                            <ul class="dropdown-menu">
                                <li><a href="javascript:void(0);">Unread</a></li>
                                <li><a href="javascript:void(0);">Unimportant</a></li>
                                <li><a href="javascript:void(0);">Add star</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="javascript:void(0);">Mute</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-12 col-xl-12">


                <?php 

                  $clients=ClientsC::getallclients();

                                if(!($clients==false)){

                    ?>
                    <ul class="mail_list list-group list-unstyled">
                        <?php
                  // pour chaque ligne (chaque enregistrement)
                  foreach ( $clients as $row ) 
                  {    
                ?>


                
                    <li class="list-group-item unread">
                        <div class="media">
                            <div class="pull-left">
                                
                                <div class="thumb hidden-sm-down m-r-20"> 
                                    <?php if(empty($row['image'])): ?>
                        <img src="img/manAVATAR2.jpg"  class="rounded-circle" alt="">
                        <?php else: ?>
                          <img src="<?= URLROOTCLIENT.'/images/'.$row['image'] ?>"  class="rounded-circle" alt="">
                        <?php endif; ?>



                                    

                                </div>



                            </div>
                            <div class="media-body">
                                <div class="media-heading">
                                    <a href="mail-single.html" class="m-r-10"><?PHP echo ($row['name'] ); echo ($row['surname'] ); ?></a>

                                    <?php
                                     if ($row['is_active']==0)
                                                    { ?>

                                    <span class="badge badge-warning bg-blue">Not Active</span>

                                      <?php
                              } else {
                                        ?>


                                    <span class="badge badge-warning bg-amber">Active</span>
                                                     <?php
                                                      }
                                                        
                                                        ?>
                                    <small class="float-right text-muted"><time class="hidden-sm-down" ><?PHP echo (ClientsC::cTime($row['created_at'])); ?></time> </small>
                                </div>
                                <p class="msg"><?PHP echo ($row['email'] ); ?></p>
                            </div>
                        </div>
                    </li>
            

     <?php
        
    } // fin foreach  
    ?>  </ul> <?php
       }
         
            
            ?>



            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <ul class="pagination m-t-20">
                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item active"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- Jquery Core Js -->
<script src="assets/bundles/libscripts.bundle.js"></script>
<script src="assets/bundles/vendorscripts.bundle.js"></script>

<script src="assets/bundles/mainscripts.bundle.js"></script>    
</body>
</html>