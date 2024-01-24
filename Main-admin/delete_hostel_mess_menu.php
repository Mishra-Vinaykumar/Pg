<!-- // Delete code php -->

<?php
include "conn.php";

$del_mess_id = $_GET['id'];

$delete_query = "DELETE FROM mess WHERE id = $del_mess_id";

$delete_result = mysqli_query($conn,$delete_query) or die("Query faild");

if ($delete_result) {
    echo "<script> alert('Delete Successfull') </script>";
    header("Location: hostel_mess_menu.php");
}else {
    echo "Not Working";
}

mysqli_close($conn);
?>


