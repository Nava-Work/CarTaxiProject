
<?php
 include "database-config.php";

 $sql = "SELECT * FROM drivers;";
 $output = mysqli_query($conn, $sql);


 if (isset($_POST['delete'])){
 
  $driverid = $_POST['driver_id'];

  echo $driverid;
 
  $qry = "DELETE FROM drivers WHERE driver_id = '{$driverid}'";
 
  $res = $conn->query($qry);
 
  if($res==True){
     header("Location: admin-manage-driver.php?key=deleted");
  }else{
     echo "Something wrong in your code";
  }

 }

?>
<?php
    if (isset($_GET['key'])) {
      if ($_GET['key']=='deleted') {
        echo "<div class='alert alert-primary' role='alert'>
        Successfully Deleted..!
      </div>";
      }
    }

  ?>
    

</body>


<!-- Mirrored from htmldemo.net/presiden/presiden/my-account.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 16 Aug 2023 03:25:51 GMT -->
</html>
