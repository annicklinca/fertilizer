<?php
      include "navbar.php";
        $recp_id=$_GET['year'];
        $recp_firt=$_GET['fertilizerid'];
      ?>

        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-themecolor">All Data</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        </ol>
                    </div>
                
                </div>
                <div class="row">
                   
                   <!-- column -->
                   <div class="col-12">
                       <div class="card">
                           <div class="card-body">
                               <div class="table-responsive">
                               <table id="zero_config" class="table  table-bordered no-wrap">
                                   <thead>
                       <tr>
                         <th>total quantity</th>
                         <th>Fertilize Price</th>
                         <th>Fertilize Budget</th>
                         <th>Budget used</th>
                         <th>Budget Remain</th> 
                         <th>Budget Status</th>                      
                       </tr>
                     </thead>
                     <tbody>
                     <?php
                       $quer=mysqli_query($conn,"SELECT SUM(quantity) FROM stockout WHERE timesent='$recp_id' AND fertilizer='$recp_firt' ");
                       while ($row=mysqli_fetch_array($quer)){
                        $totalquantity=$row['SUM(quantity)'];
                       }
                       
                       $query=mysqli_query($conn,"SELECT * FROM fertilizer WHERE ferti_type='$recp_firt' ");
                       $rowr=mysqli_fetch_array($query);
                       $quantityprice=$rowr['price'];
                       
                       $queryys=mysqli_query($conn,"SELECT * FROM budget WHERE budget_year=$recp_id  ");
                       $rowrrs=mysqli_fetch_array($queryys);
                       $fertilbudget=$rowrrs['budget'];

                       $budgetused = $totalquantity*$quantityprice;
                       $budgetremain = $fertilbudget-$budgetused;

                       ?>
                       <tr>
                         <td><?php echo $totalquantity ; ?></td>
                         <td><?php echo $quantityprice ; ?></td>
                         <td><?php echo $fertilbudget ; ?></td>
                         <td><?php echo $budgetused ; ?></td>
                         <td><?php echo $budgetremain ; ?></td>
                         <td><?php 
                         if ($budgetremain > 0) {
                            echo 'Problem on usage';
                         }
                         elseif ($budgetremain == 0) {
                            echo 'Balanced';
                         }
                         else{
                            echo 'loss';
                         }
                          ; ?></td>
                       </tr>
                     </tbody>
                         </table>
                               </div>
                           </div>
                       </div>
                   </div>
                   
                    <!-- column -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                <table id="zero_config" class="table  table-bordered no-wrap">
                                    <thead>
                        <tr>
                          <th>#</th>
                          <th>quantity</th>
                          <th>Unit</th>
                          <th>District</th>
                          <th>Farmer</th>
                       
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                        $quer=mysqli_query($conn,"SELECT * FROM stockout WHERE timesent='$recp_id' AND fertilizer='$recp_firt' ");
                        while ($row=mysqli_fetch_array($quer)){
                        ?>
                        <tr>
                          <td><?php echo $row['id'] ; ?></td>
                          <td><?php echo $row['quantity'] ; ?></td>
                          <td><?php echo $row['unit'] ; ?></td>
                          <td><?php echo $row['district'] ; ?></td>
                          <td>
                          <?php
                                    $farmerid=$row['farmer_id'];
                                   $quertwo=mysqli_query($conn,"SELECT * FROM farmers WHERE farmer_id=$farmerid");
                                    $rowtwo=mysqli_fetch_array($quertwo);
                                     echo $rowtwo['farmer_names'] ;
                             ?>  
                          </td>
                        </tr>
                        <?php
                        }
                        ?>
                      </tbody>
                          </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>
            <footer class="footer">
                © Elie.com
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
    </div>
    <script src="assets/node_modules/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/node_modules/bootstrap/js/popper.min.js"></script>
    <script src="assets/node_modules/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="js/perfect-scrollbar.jquery.min.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.min.js"></script>
    <!-- jQuery peity -->
    <script src="assets/node_modules/peity/jquery.peity.min.js"></script>
    <script src="assets/node_modules/peity/jquery.peity.init.js"></script>
</body>

</html>