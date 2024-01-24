<?php error_reporting(0) ?>
<?php include "conn.php" ?>
<?php

$q = "SELECT * FROM rooms";
$result = mysqli_query($conn,$q) or die('Query faild');
    
if (mysqli_num_rows($result) > 0) {
     
?>

<!-- Nav BAr -->
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
    
                            <a class="btn btn-success btn-lg float-end" href="add_rooms.php" role="button">Add Rooms</a>

                            <h3>Hostel Mess Menu</h3>
                        </div>
 <!-- ------------------------------------------------------------- -->

 <table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Collge</th>
      <th scope="col">Rooms</th>
      <th scope="col">facility</th>
      <th scope="col">Hostel Type</th>
      <th scope="col">Building</th>
      <th scope="col">Apply Fees</th>
      <th scope="col">Status</th>
      <th scope="col" colspan="2">Action</th>
    </tr>
  </thead>

  <?php  while ($row = mysqli_fetch_assoc($result)) { ?>

  <tbody>
    <tr>
      <th scope="row"><?php echo $row['id']  ?></th>
      <td><?php echo $row['clg']             ?></td>
      <td><?php echo $row['totalroom']       ?></td>
      <td><?php echo $row['facility']        ?></td>
      <td><?php echo $row['hosteltype']      ?></td>
      <td><?php echo $row['building']        ?></td>
      <td><?php echo $row['applyfess']       ?></td>
      <td><?php echo $row['status']          ?></td>
     <?php 
    //  echo $_SERVER["PHP_SELF"];
     ?>
      <form action="update_add_rooms.php" method="post">
      <td><a class="btn btn-outline-success" href="update_rooms.php?id=<?php echo $row['id']; ?>" role="button">Update</a></td>  
      <td><a class="btn btn-outline-success" href="delete_rooms.php?id=<?php echo $row['id']; ?>" role="button">Delete</a></td>  
    </form>
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

// if (isset($_POST['delete'])) {
//     $id = $_POST['id'];

//     $delete = "SELECT * FROM rooms WHERE id = '$id' ";
//     $del_result = mysqli_query($conn,$delete) or die("Unsucess Full");

//     if ($del_result) {
//         echo "Success";
//     }else {
//         echo "not Working";
//     }
// }
?>
