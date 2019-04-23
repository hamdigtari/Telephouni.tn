
<?php require_once 'includes\head.php'; ?>
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
                            <a href="#">points tel <span class="badge"> 3</span></a>
                        </li>
                        <li>
                            <a href="#">gadgets</a>
                        </li>
                    </ul>
                        
                    
                        
                        <div class="empty-space col-xs-b20"></div>
                    </div>
    </div>
<div id="HTMLtoPDF">
                    <div class="col-sm-7">
    <div style="padding: 10px; background: #f7f7f7;">
    <div class="card">
            
            <div class="body">
             
                
<?php 
     $liste=ClientsC::checktelgift($user->id);

                if(!($liste==false)){ ?>

 <div class="table-responsive">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>DESCRIPTION</th>
                      <th>STATUS</th>
                      <th>DATE</th>
                      <th>VALEUR</th>
                    </tr>
                  </thead>

<?php


            $liste2=ClientsC::checkteldetails($liste->id_gift);

                if(!($liste2==false)){
  // pour chaque ligne (chaque enregistrement)
  foreach ( $liste2 as $row ) 
  {
    // DONNEES A AFFICHER dans chaque cellule de la ligne 
   ?> 
 <tbody>
<?php
if ($row['status_tel']==0)
{

?>     
              <tr>
                      <td><?PHP echo $row['id_tel']; ?></td>

                      <td><?PHP echo $row['description_tel']; ?></td>
                      <td>
                        <span class="label label-danger">Debit</span>
                      </td>
                      <td><?PHP echo (ClientsC::cTime($row['date_tel'])); ?></td>
                      <td>
                        <span class="text-danger">-<?PHP echo $row['balance_tel']; ?></span>
                      </td>
                    </tr>
<?php
  } else {
?>

                    <tr>
                      <td><?PHP echo $row['id_tel']; ?></td>
                      <td><?PHP echo $row['description_tel']; ?></td>
                      <td>
                        <span class="label label-success">Credit</span>
                      </td>
                      <td><?PHP echo (ClientsC::cTime($row['date_tel'])); ?></td>
                      <td>
                        <span class="text-success">+<?PHP echo $row['balance_tel']; ?></span>
                      </td>
                    </tr>

                    <?php
  }
    }// fin foreach ?> </tbody> 
    
    
      <?php }

            ?>

</table>
              </div>
                 
               
              <div class="row sales-report">
                <div class="col-6">
         

                  <h5 class="m-b-0"><?PHP echo (ClientsC::cTime(time())); ?></h5>
                  <p class="m-b-0">Tel gifts Report</p>
                </div>
                <div class="col-6">
                  <h3 class="text-right text-success m-t-0 m-b-0">£<?PHP echo ($liste->totale); ?></h3>
                </div>
              </div>
            </div>
            <?PHP        } else {
            ?>

<h3 class="text-right text-success m-t-0 m-b-0">YOU DONT HAVE ANY Tel POINTS :( </h3>
            <?PHP        } 
            ?>
          </div> 
                    </div>    
                    
                        
                        <div class="empty-space col-xs-b20"></div>
                    </div>
    </div><!-- here we call the function that makes PDF -->
  <a href="#" onclick="HTMLtoPDF()">Download PDF</a>
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

      <!-- these js files are used for making PDF -->
  <script src="js/jspdf.js"></script>
  <script src="js/jquery-2.1.3.js"></script>
  <script src="js/pdfFromHTML.js"></script>

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
