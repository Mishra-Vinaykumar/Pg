<?php
// ---> Do not use This
// error_reporting(0);   

include "conn.php";

$std_query = "SELECT * FROM students";
$std_result = mysqli_query($conn,$std_query);

if (mysqli_num_rows($std_result) > 0) {
    
?>     
    <!-- Navbar Brand-->
<?php include "sidenavbar.php"; ?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Dashboard</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
                <div class="row">
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-primary text-white mb-4">
                            <div class="card-body">Total Rooms</div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
<!------------------------------------------------------------- -->
                                <?php
                                //Display Data from Total Rooms

                                    $total_room = "SELECT SUM(totalroom) AS total_room FROM rooms";
                                    $room_result = mysqli_query($conn, $total_room);

                                    // Display the result on the web page
                                    if ($room_result) {
                                        $row_room = mysqli_fetch_assoc($room_result);
                                        echo "Rooms: <h3>" . $row_room['total_room'] . "</h3>";
                                    } else {
                                        echo "Error: " . mysqli_error($conn);
                                    }
                                ?>       
                                <a class="small text-white stretched-link" href="details_rooms.php"></a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-warning text-white mb-4">
                                <div class="card-body">Remaning Rooms </div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="#">View Details</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-success text-white mb-4">
                                <div class="card-body">Ocupied Rooms</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="#">View Details</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-danger text-white mb-4">
                                <div class="card-body">Canceled Rooms</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="#">View Details</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                   
             <?php //include 'chart.php'; ?>       

                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Ragister Students
                        </div>
                        
                        <div class="card-body">
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>F-Name</th>
                                        <th>L-Name</th>
                                        <th>DOB</th>
                                        <th>Gender</th>
                                        <th>Email</th>
                                        <th>Mobile</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>ID</th>
                                        <th>F-Name</th>
                                        <th>L-Name</th>
                                        <th>DOB</th>
                                        <th>Gender</th>
                                        <th>Email</th>
                                        <th>Mobile</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                <?php 
                                while ($r = mysqli_fetch_assoc($std_result)) {  
                                    ?>
                                    <tr>
                                        <td><?php echo $r['Id'] ?></td>
                                        <td><?php echo $r['fname'] ?></td>
                                        <td><?php echo $r['lname'] ?></td>
                                        <td><?php echo $r['dob'] ?></td>
                                        <td><?php echo $r['gender'] ?></td>
                                        <td><?php echo $r['email'] ?></td>
                                        <td><?php echo $r['phone'] ?></td>
                                        
                                    </tr>
                                    <?php 
                                         }
                                       }
                                     ?>
                                </tbody>
                            </table>
                        </div>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"
        crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
</body>

</html>