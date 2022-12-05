<?php
      include "navbar.php";

if (isset($_POST['sendmessage'])){
    $id=$_POST['firstname'];
    $message=$_POST['message'];

    $sql=mysqli_query($conn,"INSERT INTO messages  VALUES (NULL,
            '$admin_id',
            '$id',
            '$message',current_timestamp())");

        if ($sql) {
            $successmessage .='Send Message, Successfully!';  
        }
        else {
            $errormessage .='Send Message, failed!'.$conn->error;     
        }    
   
}
      ?>

        <div class="page-wrapper">
 
            <div class="container-fluid">
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-themecolor">Retailers</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)"></a></li>
                            <li class="breadcrumb-item active"></li>
                        </ol>
                    </div>
                
                </div>
                <div class="row">
                   
                    <!-- column -->
                        <div class="col-sm-12">
                                    <h5 class="mt-4">Conversation</h5>
                                    <hr>
                                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Send Message</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Chat Sent</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profil" role="tab" aria-controls="pills-profile" aria-selected="false">Chat Received</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="pills-tabContent">
                                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                           <form action="" method="POST" enctype="multipart/form-data">
                                                    
                                           <?php
                                                            if ( isset($successmessage)) {
                                                                echo '
                                                                                
                                                                    <div class="card-body">
                                                                    <ul class="list-group">
                                                                    <li class="list-group-item list-group-item-success">'.$successmessage.'</li>
                                                                    </ul>
                                                                    </div>
                                                                ';
                                                            }
                                                            ?>
                                                            <?php
                                                            if ( isset($errormessage)) {
                                                            echo '
                                                            <div class="card-body">
                                                            <ul class="list-group">
                                                            <li class="list-group-item list-group-item-success">'.$errormessage.'</li>
                                                            </ul>
                                                            </div>
                                                            ';
                                                            }
                                                            ?>
                                                  <div class="form-group row">
                                                      <div class="col-sm-12">
                                                        <label class="col-form-label">Receiver Name</label>
                                                            <select name="firstname" class="form-control">
                                                                <?php
                                                                    $quer=mysqli_query($conn,"SELECT * FROM user ");
                                                                    while ($row=mysqli_fetch_array($quer)) {
                                                                    ?> 
                                                                    <option value="<?php echo $row['id']; ?>"><?php echo $row['firstname']; ?></option>
                                                                <?php
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-12">
                                                        <label class="col-form-label">Message</label>
                                                        <textarea name="message" rows="6" class="form-control form-control-normal"></textarea>
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group row">
                                                    <div class="col-sm-12">
                                                        <input type="submit" name="sendmessage" value="Send Message"
                                                        class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">
                                                    </div>
                                                </div>
                                                
                                            </form>
                                        </div>
                                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                        <div class="card-body px-0 py-0">
                                            <div class="table-responsive">
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
                                            </div>
                                        </div>
                                        </div>
                                         <div class="tab-pane fade" id="pills-profil" role="tabpanel" aria-labelledby="pills-profile-tab">
                                        <div class="card-body px-0 py-0">
                                            <div class="table-responsive">
                                                <div class="session-scroll" style="height:478px;position:relative;">
                                                    <table class="table table-hover m-b-0">
                                                    <thead style="color: #FF7400;font-style: bold;">
                                                       <tr>
                                                           <th>Sender Name</th>
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
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                </div>
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