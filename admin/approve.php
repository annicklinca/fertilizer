<?php
include '../connection.php';
if (isset($_GET['approved'])){
    $approved=$_GET['approved'];
    $quer=mysqli_query($conn,"SELECT * FROM requests WHERE request_id=$approved;");
    $row=mysqli_fetch_array($quer);
    $famid = $row['farmer_id'];
    $fertiquantity = $row['fertiquantity'];
    $fertilizerunit = $row['fertilizerunit'];
    $ferticategory = $row['ferticategory'];
    $distric = $row['district'];
    $uid = $row['user_id'];
    $orders = $row['order_date'];
    $orderdate = explode('-', $orders);
    $year  = $orderdate[0];
    $sql=mysqli_query($conn,"UPDATE requests SET status='Approved' WHERE request_id=$approved;");
    if ($sql) {
      $sql2=mysqli_query($conn,"INSERT INTO stockout(
        quantity,
        fertilizer,
        unit,
        farmer_id,
        district,
        timesent,
        user_id) VALUES (
            '$fertiquantity',
            '$ferticategory',
            '$fertilizerunit',
            '$famid',
            '$distric',
            '$year',
            '$uid')");
        if ($sql2) {
          $sql3=mysqli_query($conn,"UPDATE stockin SET quantity=quantity-$fertiquantity WHERE ferti_id='$ferticategory';");
          if ($sql3) {
            header("location:requests.php");
          }
          else {
            echo 'last fail';
          }
        }
        else {
          echo mysqli_error($conn);
        }
  }
  else {
    echo '
    <script type="text/javascript">alert("cancel order, failed!")</script>    
    ';
    header("location:requests.php"); 
  }
}

?>