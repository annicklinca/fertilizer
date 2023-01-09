<?php
      include "navbar.php";

      $query=mysqli_query($conn,"SELECT * FROM requests ");
 while ($row=mysqli_fetch_array($query)){
  $data20=$row['fertiquantity'];
  $data21=$row['ferticategory'];
  $data22=$row['budget_year'];
 }
 $dataPoints1=array();


   
     $budget=mysqli_query($conn,"SELECT * FROM requests");
    while ($row=mysqli_fetch_array($budget)){
        $data20=$row['fertiquantity'];
        $data21=$row['ferticategory'];
        $data22=$row['budget_year'];
       
	 array_push($dataPoints1,array("label"=> $data21, "y"=> $data20),);
    }
	// array("label"=> $data21, "y"=> 30),
	// array("label"=> "2020", "y"=> 0)
	// array("label"=> "2013", "y"=> 35.30),
	// array("label"=> "2014", "y"=> 39.50),
	// array("label"=> "2015", "y"=> 50.82),
	// array("label"=> "2016", "y"=> 74.70)\
    $dataPoints2 = array();
 
    $budget1=mysqli_query($conn,"SELECT * FROM requests");
    while ($row=mysqli_fetch_array($budget1)){
        $data20=$row['fertiquantity'];
        $data21=$row['ferticateory'];
        $ydata22=$row['budget_year'];
       
	 array_push($dataPoints2,array("label"=> $ydata22, "y"=> $data21),);
    }
      ?>
      <head>
           <script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	// theme: "",
	title:{
		text: ""
	},
	axisY:{
		includeZero: true
	},
	legend:{
		cursor: "pointer",
		verticalAlign: "center",
		horizontalAlign: "right",
		itemclick: toggleDataSeries
	},
	data: [{
		type: "column",
		name: "",
		indexLabel: "{y}",
		yValueFormatString: "",
		showInLegend: true,
		dataPoints: <?php echo json_encode($dataPoints1, JSON_NUMERIC_CHECK); ?>
	},{
		type: "column",
		name: "",
		indexLabel: "{y}",
		yValueFormatString: "",
		showInLegend: true,
		dataPoints: <?php echo json_encode($dataPoints2, JSON_NUMERIC_CHECK); ?>
	},
//   {
// 		type: "column",
// 		name: "ICK",
// 		indexLabel: "{y}",
// 		yValueFormatString: "$#0.##",
// 		showInLegend: true,
// 		dataPoints: 
// 	}
]
});
chart.render();
 
function toggleDataSeries(e){
	if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
		e.dataSeries.visible = false;
	}
	else{
		e.dataSeries.visible = true;
	}
	chart.render();
}
 
}
</script>
</head>

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
                        <h3 class="text-themecolor">Analysis Base on Budget Year</h3>
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
													<label class="col-sm-4 col-form-label">Select Year</label>
													<div class="col-sm-8">
                          <select name="year" class="form-control form-control-normal">
                            <option value="2020">2020</option>
                            <option value="2021">2021</option>
                            <option value="2022">2022</option>
                            <option value="2023">2023</option>
                            <option value="2024">2024</option>
                            <option value="2025">2025</option>
                            <option value="2026">2026</option>
                            <option value="2027">2028</option>
                            <option value="2029">2029</option>
                            <option value="2030">2030</option>
                            <option value="2031">2031</option>
                            <option value="2032">2032</option>
                            <option value="2033">2033</option>
                            <option value="2034">2034</option>
                            <option value="2035">2035</option>
                            <option value="2036">2036</option>
                            <option value="2037">2037</option>
                            <option value="2038">2038</option>
                            <option value="2039">2039</option>
                            <option value="2040">2040</option>
                            </select>
													</div>
                             <label class="col-sm-4 col-form-label">Ferti Type</label>
													<div class="col-sm-8">
                                                    <select name="fertilizerid" class="form-control form-control-normal">
                                              <?php
                                                    $quer=mysqli_query($conn,"SELECT * FROM fertilizer ");
                                                      while ($row=mysqli_fetch_array($quer)){
                                               ?>
                                                <option value="<?php echo $row['ferti_type'] ; ?>"><?php echo $row['ferti_type'] ; ?></option>
                                                  <?php
                                                    }
                                                  ?>
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
<div class="col-6">
<div class="card-body">
                                <div class="d-flex no-block">
                                    <div>
                                        <h5 class="card-title m-b-0"> Investment chart</h5>
                                    </div>
                                </div>
                                <div class="chart-area">
                  <div id="chartContainer" style="height: 300px; width: 80%;"></div>
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
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
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