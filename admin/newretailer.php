<?php
      include "navbar.php";
      if (isset($_POST['add'])){
    
        $id=$_POST['id'];
        $firstname=$_POST['firstname'];
        $lastname=$_POST['lastname'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $address=$_POST['address'];
        $password=$_POST['password'];
        $role=$_POST['role'];
    
        $sql=mysqli_query($conn,"INSERT INTO user(
            id ,
            firstname,
            lastname,
            email,
            phone,
            address,
            password,
            role) VALUES (
                '$id',
                '$firstname',
                '$lastname',
                '$email',
                '$phone',
                '$address',
                '$password',
                '$role')");
    
            if ($sql) {
                $successmessage .='Retailer add, Successfully';  
            }
            else {
                $errormessage .='Add Retailer failed!'.$conn->error;     
            } 
    } 
      ?>

        <div class="page-wrapper">
 
            <div class="container-fluid">
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-themecolor">Retailers</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Table Basic</li>
                        </ol>
                    </div>
                
                </div>
                <div class="row">
                   
                    <!-- column -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div >
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
                                                             <label class="col-sm-2 col-form-label">First Names</label>
                                                             <div class="col-sm-10">
                                                             <input type="text" name="firstname" class="form-control form-control-normal"
                                                                 placeholder="">
                                                             </div>
                                                         </div>
                                                         <div class="form-group row">
                                                             <label class="col-sm-2 col-form-label">Last Names</label>
                                                             <div class="col-sm-10">
                                                                 <input type="text" name="lastname" class="form-control form-control-normal"
                                                                 placeholder="">
                                                             </div>
                                                         </div>
                                                     
                                                         <div class="form-group row">
                                                             <label class="col-sm-2 col-form-label">Email</label>
                                                             <div class="col-sm-10">
                                                                 <input type="text" name="email" class="form-control form-control-normal"
                                                                 placeholder="">
                                                             </div>
                                                         </div>
                                                         <div class="form-group row">
                                                             <label class="col-sm-2 col-form-label">Phone</label>
                                                             <div class="col-sm-5">
                                                                 <input type="text" name="phone" class="form-control form-control-normal"
                                                                 placeholder="">
                                                             </div>
                                                             <div class="col-sm-5">
                                                                <input type="text" name="address" class="form-control form-control-normal"
                                                                 placeholder="Site">
                                                             </div>
                                                         </div>
                                                         <div class="form-group row">
                                                             <label class="col-sm-2 col-form-label">Password</label>
                                                             <div class="col-sm-5">
                                                                 <input type="password" name="password" class="form-control form-control-normal"
                                                                 placeholder="">
                                                             </div>
                                                             <div class="col-sm-5">
                                                                <input type="text" name="role" class="form-control form-control-normal"
                                                                 placeholder="role">
                                                             </div>
                                                         </div>
                                                         <div class="form-group row">
                                                             <div class="col-sm-12" >
                                                                 <input type="submit" name="add" value="Add Retailer"
                                                                 class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20" >
                                                             </div>
                                                         </div>
                                                         
                                                     </form>
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