<?php
      include "navbar.php";
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
                        <h3 class="text-themecolor">Requests</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Requests</a></li>
                            <li class="breadcrumb-item active"> Basics</li>
                        </ol>
                    </div>
                
                </div>
              
                <div class="row">
                    <!-- column -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title"></h4>
                                <h6 class="card-subtitle">All Requests </h6>
                                <div class="table-responsive">
                                    <table class="table">
                                    <thead>
												<tr>
													<th>#</th>
													<th>Farmer Name</th>
													<th>Fertilizer Category</th>
													<th>Land Scale</th>
                                                    <th>Order Date</th>
													<th>Fertilizer Quantity</th>
													<th>Fertilizer Unit</th>
													<th>District</th>
													<th>Sector</th>
													<th>Cell</th>
                                                    <th>Village</th>
                                                    <th>Retailer</th>
													<th>Status</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody>
											<?php
												$quer=mysqli_query($conn,"SELECT * FROM requests");
												while ($row=mysqli_fetch_array($quer)){
												?>
												<tr>
						 <td><?php echo $row['request_id'] ; ?></td>
                           <td><?php
                                    $farmerid=$row['farmer_id'];
                                   $quertwo=mysqli_query($conn,"SELECT * FROM farmers WHERE farmer_id=$farmerid");
                                    $rowtwo=mysqli_fetch_array($quertwo);
                                     echo $rowtwo['farmer_names'] ;
                             ?></td>
						   <td><?php echo $row['ferticategory'] ; ?></td>
						   <td><?php echo $row['landscale'] ; ?></td>
                           <td><?php echo $row['order_date'] ; ?></td>
						   <td><?php echo $row['fertiquantity'] ; ?></td>
						   <td><?php echo $row['fertilizerunit'] ; ?></td>
						   <td><?php echo $row['district'] ; ?></td>
						   <td><?php echo $row['sector'] ; ?></td>
						   <td><?php echo $row['cell'] ; ?></td>
                          <td><?php echo $row['village'] ; ?></td>
                          <td><?php
                                    $uid=$row['user_id'];
                                   $quertwo1=mysqli_query($conn,"SELECT * FROM user WHERE id=$uid");
                                    $rowtwo1=mysqli_fetch_array($quertwo1);
                                    echo  $rowtwo1['firstname'].' '.$rowtwo1['lastname'] ;
                             ?></td>
													<td><?php echo $row['status'] ; ?></td>
													<td>
                                                    <?php if ($row['status'] != 'Approved') {
                                                        ?>
                                                         
                                                    <a  href="approve.php?approved=<?php echo $row['request_id']; ?>" class="btn btn-success" style="color: white;">Approve Request</a></td>
												
                                                        <?php
                                                    }  ; ?>   </tr>
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
                © 2018 Adminwrap by wrappixel.com
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