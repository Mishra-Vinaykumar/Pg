<?php 
include "conn.php";

if (isset($_FILES['filetoupload'])) {
   $errors = array();

   $file_name = $_FILES['filetoupload']['name'];
   $file_size = $_FILES['filetoupload']['size'];
   $file_tmp = $_FILES['filetoupload']['tmp_name'];
   $file_type = $_FILES['filetoupload']['type'];
   $file_ext = strtolower(end(explode('.',$file_name)));
   $extension = array("jpeg","jpg","png");

   if (in_array($file_ext,$extension) === false) {
      $errors[] = "This Extension file not allowed, Please Chose a jpeg or PNG Formate File";
   }
   // 1kb = 1024 byts
   // 1mb = 1024 kb
   // 1kb * 1kb = 1048576 byts
   if ($file_size > 2097152) {
      $errors[] = "File size must be 2 MB or Lower .";
   }

   if (empty($errors) == true) {
      move_uploaded_file($file_tmp,"upload/".$file_name);
   }else {
      print_r($errors);
      die();
   }
}

   $clg = $_POST['collage'];
   $rooms = $_POST['totalroom']; 
   $facility = $_POST['facility'];
   $hosteltype = $_POST['hosteltype'];
   $buildingName = $_POST['building'];
   $applyfess = $_POST['applyfess'];
   $status = $_POST['status'];
   $date = date("d M, Y");

   $query = "INSERT INTO rooms (clg,totalroom,post,facility,hosteltype,building,applyfess,status,post_date) VALUES ('{$clg}','{$rooms}','{$file_name}','{$facility}','{$hosteltype}','{$buildingName}','{$applyfess}','{$status}','{$date}')" or die("query fail");

   $result= mysqli_query($conn,$query) or die("Query fails");

   if ($result) {
      echo "<script> alert('Data inserted sucseesfully') </script>";
      header("Location: details_rooms.php");
   }else {
      echo "<script> alert('Not Insert or Failed') </script>";
      // header("Location:");
   }

?>
