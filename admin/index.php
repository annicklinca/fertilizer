      <?php
      include "navbar.php";

      $query=mysqli_query($conn,"SELECT * FROM budget ");
 while ($row=mysqli_fetch_array($query)){
  $data20=$row['budget'];
  $data21=$row['ferti_type'];
  $data22=$row['budget_year'];
 }
 $dataPoints1=array();


   
     $budget=mysqli_query($conn,"SELECT * FROM budget");
    while ($row=mysqli_fetch_array($budget)){
        $data20=$row['budget'];
        $data21=$row['ferti_type'];
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
 
    $budget1=mysqli_query($conn,"SELECT * FROM budget");
    while ($row=mysqli_fetch_array($budget1)){
        $data20=$row['budget'];
        $data21=$row['ferti_type'];
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
                                        <h5 class="card-title m-b-0"> Analysis chart</h5>
                                    </div>
                                </div>
                                <div class="chart-area">
                  <div id="chartContainer" style="height: 300px; width: 80%;"></div>
                  </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex m-b-30 no-block">
                                    <h5 class="card-title m-b-0 align-self-center">Fertilizers Category</h5>
                                   
                                </div>
                                <div id="visitor" style="height:260px; width:100%;"></div>
                                <ul class="list-inline m-t-30 text-center font-12">
                                    <li><i class="fa fa-circle text-purple"></i> npk</li>
                                    <li><i class="fa fa-circle text-success"></i> sodium</li>
                                    <li><i class="fa fa-circle text-info"></i> fct</li>
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
                <div class="col-lg-6 col-md-12">
                        <div class="card card-body mailbox">
                            <h5 class="card-title" style="font-weight: bold;">Retailers</h5>
                            <div class="message-center ps ps--theme_default ps--active-y" data-ps-id="a045fe3c-cb6e-028e-3a70-8d6ff0d7f6bd">
                                <!-- Message -->
                               
                                    <div class="btn btn-success btn-circle"><i class="fa fa-link"></i></div>
                                    <div class="mail-contnet">
                                <div class="session-scroll" style="height:478px;position:relative;">
                                                    <table class="table table-hover m-b-0">
                                                    <thead style="color: blue;font-style: bold;">
                                                       <tr>
                                                           <th>Firstname</th>
                                                           <th>Lastname</th>
                                                           <th>Phone</th>
                                                           <th>Location</th>
                                             
                                            </tr>
                                        </thead>
                                        <tbody>
                                          <?php
                                                         $sel=$conn->query("SELECT * FROM user where role='retailer' ");
                                                       while($rows=mysqli_fetch_array($sel)){
                                                        ?>
                                            <tr>
                                                <td><?php echo $rows['firstname']; ?></td>
                                                <td><?php echo $rows['lastname']; ?></td>
                                                <td><?php echo $rows['phone']; ?></td>
                                                <td><?php echo $rows['address']; ?></td>
                                               
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
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
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