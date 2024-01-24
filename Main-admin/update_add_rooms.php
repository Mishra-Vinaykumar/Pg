<?php 
include "conn.php";

if (isset($_POST['Submit'])) {

   $clg = $_POST['clg'];
   $rooms = $_POST['rooms']; 
   $facility = $_POST['facility'];
   $hosteltype = $_POST['hosteltype'];
   $buildingName = $_POST['building'];
   $applyfess = $_POST['applyfess'];
   $status = $_POST['status'];

   $query = "UPDATE INTO " or die("query fail");

   $result= mysqli_query($conn,$query) or die("Query fails");

   if ($result) {
      echo "<script> alert('Data inserted sucseesfully') </script>";
      header("Location: details_rooms.php");
   }else {
      echo "<script> alert('Not Insert or Failed') </script>";
      // header("Location:");
   }

}
?>
