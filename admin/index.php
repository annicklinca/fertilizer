      <?php
      include "navbar.php";
      ?>

        <div class="page-wrapper">
            <div class="container-fluid">
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-themecolor">Dashboard</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex no-block">
                                    <div>
                                        <h5 class="card-title m-b-0">Sales Chart</h5>
                                    </div>
                                </div>
                                <div class="" id="sales-chart" style="height: 355px;"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex m-b-30 no-block">
                                    <h5 class="card-title m-b-0 align-self-center">Our Visitors</h5>
                                    <div class="ml-auto">
                                        <select class="custom-select b-0">
                                            <option selected="">Today</option>
                                            <option value="1">Tomorrow</option>
                                        </select>
                                    </div>
                                </div>
                                <div id="visitor" style="height:260px; width:100%;"></div>
                                <ul class="list-inline m-t-30 text-center font-12">
                                    <li><i class="fa fa-circle text-purple"></i> Tablet</li>
                                    <li><i class="fa fa-circle text-success"></i> Desktops</li>
                                    <li><i class="fa fa-circle text-info"></i> Mobile</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Start Notification -->
                    <div class="col-lg-6 col-md-12">
                        <div class="card card-body mailbox">
                            <h5 class="card-title">Messages</h5>
                            <div class="message-center ps ps--theme_default ps--active-y" data-ps-id="a045fe3c-cb6e-028e-3a70-8d6ff0d7f6bd">
                                <!-- Message -->
                               
                                    <div class="btn btn-danger btn-circle"><i class="fa fa-link"></i></div>
                                    <div class="mail-contnet">
                                <div class="session-scroll" style="height:478px;position:relative;">
                                                    <table class="table table-hover m-b-0">
                                                    <thead style="color: #FF7400;font-style: bold;">
                                                       <tr>
                                                           <th>Receiver Name</th>
                                                           <th>Message</th>
                                                           <th>Timesent</th>
                                             
                                            </tr>
                                        </thead>
                                        <tbody>
                                          <?php
                                                         $sel=$conn->query("SELECT * FROM messages");
                                                       while($rows=mysqli_fetch_array($sel)){
                                                        ?>
                                            <tr>
                                            <td ><?php
                                                 $idd=$rows['recieve_id']; 
                                                 $sele=$conn->query("SELECT * FROM user WHERE id=$idd");
                                                 $rowss=mysqli_fetch_array($sele);
                                                 echo $rowss['firstname'].'&nbsp'.$rowss['lastname'];
                                                 ?></td>
                                                <td><?php echo $rows['message']; ?></td>
                                                <td><?php echo $rows['timesent']; ?></td>
                                             
                                               
                                            </tr>
                                            <?php
                                            }
                                            ?>   
                                          </tbody> 
                                                    </table>
                                                </div>
                               
                              <!-- Message -->
                              
                            </div>
                        </div>
                    </div>
                    <!-- End Notification -->
                   
                </div>
            <footer class="footer"> © Ferti.com </footer>
        </div>
    </div>
    <script src="assets/node_modules/jquery/jquery.min.js"></script>
    <!-- Bootstrap popper Core JavaScript -->
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
    <script src="assets/node_modules/raphael/raphael-min.js"></script>
    <script src="assets/node_modules/morrisjs/morris.min.js"></script>
    <!--c3 JavaScript -->
    <script src="assets/node_modules/d3/d3.min.js"></script>
    <script src="assets/node_modules/c3-master/c3.min.js"></script>
    <!-- Chart JS -->
    <script src="js/dashboard1.js"></script>
</body>

</html>