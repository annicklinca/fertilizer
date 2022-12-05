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
                        <h3 class="text-themecolor">Analyse Base on District</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active"></li>
                        </ol>
                    </div>
                
                </div>
                <div class="row">
                    <div class="col-6">
                    <form action="showdata.php" method="GET">
												<div class="form-group row">
													<label class="col-sm-4 col-form-label">Select District</label>
													<div class="col-sm-8">
                          <select name="district" class="form-control form-control-normal">
                            <option value="Gasabo">Gasabo</option>
                            <option value="Kicukiro">Kicukiro</option>
                            <option value="Nyarugenge">Nyarugenge</option>
                            <option value="Burera">Burera</option>
                            <option value="Gakenke">Gakenke</option>
                            <option value="Gicumbi">Gicumbi</option>
                            <option value="Rulindo">Rulindo</option>
                            <option value="Musanze">Musanze</option>
                            <option value="Kamonyi">Kamonyi</option>
                            <option value="Muhanga">Muhanga</option>
                            <option value="Ruhango">Ruhango</option>
                            <option value="Nyanza">Nyanza</option>
                            <option value="Huye">Huye</option>
                            <option value="Gisagara">Gisagara</option>
                            <option value="Nyaruguru">Nyaruguru</option>
                            <option value="Nyamagabe">Nyamagabe</option>
                            <option value="Bugesera">Bugesera</option>
                            <option value="Gatsibo">Gatsibo</option>
                            <option value="Kayonza">Kayonza</option>
                            <option value="Nyagatare">Nyagatare</option>
                            <option value="Ngoma">Ngoma</option>
                            <option value="Rwamagana">Rwamagana</option>
                            <option value="Kirehe">Kirehe</option>
                            <option value="Karongi">Karongi</option>
                            <option value="Ngororero">Ngororero</option>
                            <option value="Nyabihu">Nyabihu</option>
                            <option value="Nyamasheke">Nyamasheke</option>
                            <option value="Rubavu">Rubavu</option>
                            <option value="Rusizi">Rusizi</option>
                            <option value="Rutsiro">Rutsiro</option>
                            </select>
													</div>

                            <div class="col-sm-12" >
                            <br>
                            <button type="submit"
                                class="btn btn-primary">Show Data</button>
                            </div>
                    </form>
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