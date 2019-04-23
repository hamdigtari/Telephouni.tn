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
  
               
        <div class="empty-space col-xs-b35 col-md-b70"></div>
       
<?php
       

                  echo(ClientsC::getMsg('msg_notify'));
   
    
    ?>

<div style="background: #b8cd06; padding: 30px;">
               

<?php require_once 'includes/profile_info.php'; ?>


                    <div class="col-sm-2">
    <div style="padding: 10px; background: #f7f7f7;">
    <ul class="categories-menu transparent">
                        <li>
                            <a href="#">commands</a>
                        </li>
                        <li>
                            <a href="#">factures</a>
                        </li>
                        <li>
                            <a href="#">activity</a>
                        </li>
                        <li>
                            <a href="#">points tel</a>
                        </li>
                        <li>
                            <a href="#">gadgets</a>
                        </li>
                    </ul>
                        
                    
                        
                        <div class="empty-space col-xs-b20"></div>
                    </div>
    </div>
                    <div class="col-sm-7">
    <div style="padding: 10px; background: #f7f7f7;">
    <div class="card">
            <div class="header">
              <h2>Recent sales</h2>
              <ul class="header-dropdown m-r--5">
                <li class="dropdown">
                  <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                    <i class="zmdi zmdi-more-vert"></i>
                  </a>
                  <ul class="dropdown-menu float-right">
                    <li>
                      <a href="javascript:void(0);">Action</a>
                    </li>
                    <li>
                      <a href="javascript:void(0);">Another action</a>
                    </li>
                    <li>
                      <a href="javascript:void(0);">Something else here</a>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
            <div class="body">
              <div class="table-responsive">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>NAME</th>
                      <th>STATUS</th>
                      <th>DATE</th>
                      <th>PRICE</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>
                        <span>Ipsum is simply</span>
                      </td>
                      <td>
                        <span class="label label-success">DOING</span>
                      </td>
                      <td>Nov 11, 2017</td>
                      <td>
                        <span class="text-success">$100</span>
                      </td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Lorem Ipsum is</td>
                      <td>
                        <span class="label label-info">TO DO</span>
                      </td>
                      <td>Nov 18, 2017</td>
                      <td>
                        <span class="text-info">$321</span>
                      </td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>Ipsum is simply</td>
                      <td>
                        <span class="label label-danger">SUSPENDED</span>
                      </td>
                      <td>Nov 22, 2017</td>
                      <td>
                        <span class="text-danger">-$204</span>
                      </td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td>Hosting press html</td>
                      <td>
                        <span class="label label-warning">WAIT APPROVEL</span>
                      </td>
                      <td>Nov 29, 2017</td>
                      <td>
                        <span class="text-success">$11</span>
                      </td>
                    </tr>
                    <tr>
                      <td>5</td>
                      <td>Lorem is simply</td>
                      <td>
                        <span class="label label-success">DOING</span>
                      </td>
                      <td>Dec 1, 2017</td>
                      <td>
                        <span class="text-success">$11</span>
                      </td>
                    </tr>
                    <tr>
                      <td>6</td>
                      <td>Lorem Ipsum simply</td>
                      <td>
                        <span class="label label-success">DOING</span>
                      </td>
                      <td>Dec 3, 2017</td>
                      <td>
                        <span class="text-danger">-$11</span>
                      </td>
                    </tr>
                    <tr>
                      <td>7</td>
                      <td>Ipsum is simply</td>
                      <td>
                        <span class="label label-warning">WAIT APPROVEL</span>
                      </td>
                      <td>Dec 3, 2017</td>
                      <td>
                        <span class="text-success">$54</span>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="row sales-report">
                <div class="col-6">
                  <h5 class="m-b-0">Jan 2017</h5>
                  <p class="m-b-0">Sales Report</p>
                </div>
                <div class="col-6">
                  <h3 class="text-right text-success m-t-0 m-b-0">$4,231</h3>
                </div>
              </div>
            </div>
          </div>
                        
                    
                        
                        <div class="empty-space col-xs-b20"></div>
                    </div>
    </div>
                </div>
            </div>
                        <div class="empty-space col-xs-b20"></div>
                    </div>
                    
                </div>
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
