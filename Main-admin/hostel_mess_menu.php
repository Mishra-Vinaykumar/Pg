<?php error_reporting(0) ?>
<?php include "conn.php" ?>
<?php

$q = "SELECT * FROM mess";
$result = mysqli_query($conn,$q) or die('Query faild');
    
if (mysqli_num_rows($result) > 0) {
     
?>
<?php include "sidenavbar.php"; ?>

    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Sidenav Light</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                </ol>
                <div class="card mb-4">
                    <div class="card-body">

                        <a class="btn btn-success btn-lg float-end" href="backend_hostel_mess_menu.php" role="button">Add items</a>
                        <h3>Hostel Mess Menu</h3>
                        </div>
 <!-- ------------------------------------------------------------- -->

 <table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Day</th>
      <th scope="col">Mess</th>
      <th scope="col">Food Items</th>
      <th scope="col">Status</th>
      <th scope="col" colspan='2'>Action</th>
    </tr>
  </thead>

  <?php  while ($row = mysqli_fetch_assoc($result)) { ?>

  <tbody>
    <tr>
      <th scope="row"><?php echo $row['id']       ?></th>
      <!-- <td></td> -->
      <td><?php echo $row['day']      ?></td>
      <td><?php echo $row['meal']     ?></td>
      <td><?php echo $row['fooditems'] ?></td>
      <td><?php echo $row['status']   ?></td>
      <td><a class="btn btn-outline-warning" href="hostel_mess_menu.php?id=<?php echo $row['id']; ?>" role="button">Edit</a></td>  
      <td><a class="btn btn-outline-danger" href="delete_hostel_mess_menu.php?id=<?php echo $row['id']; ?>" role="button">Delete</a></td>  
    </tr>
    <?php } ?>
  </tbody>
</table>


<?php 
}
?>
                    </div>
                </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Your Website 2023</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
</body>

</html>

<?php
// Delete code php

$edt_mess_id = $_GET['id'];

$delete_query = "DELETE FROM mess WHERE id = $edt_mess_id";

$edt_result = mysqli_query($conn,$delete_query) or die("Query faild");

if ($edt_result) {
    echo "<script> alert('Delete Successfull') </script>";
    header("Location: add_mess_menu.php");
    // header("Location: add_rooms.php");
}else {
    echo "Not Working";
}

?>


