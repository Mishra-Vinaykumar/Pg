<?php include "conn.php" ?>

<?php

$room_id = $_GET['id'];

$query = "SELECT * FROM rooms where id = {$room_id}";
$result = mysqli_query($conn,$query) or die('Fails');

if (mysqli_num_rows($result)>0) {
    # code... 
?>

<?php include "sidenavbar.php"; ?>

        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Update Rooms</h1>
                    <!-- <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                        <li class="breadcrumb-item active">Static Navigation</li>
                    </ol> -->
                    <div class="card mb-4">
                        <div class="card-body">
                            <p class="mb-0">
                            <h3>---</h3>
                        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                            <form action="update_add_rooms.php" method="post">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">collage</label>
                                    <select class="form-control" id="exampleFormControlSelect1" name="clg" required>
                                        <option></option>
                                        <option>LJ University</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Rooms</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" name="rooms" value="<?php echo $row['rooms']?>" placeholder="no of rooms" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Facility-Type</label>
                                    <select class="form-control" id="exampleFormControlSelect1" name="facility" required>
                                        <option></option>
                                        <option>AC</option>
                                        <option>Non-AC</option>
                                    </select>
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Hostel for</label>
                                        <select class="form-control" id="exampleFormControlSelect1" name="hosteltype" required>
                                            <option></option>
                                            <option>Boys</option>
                                            <option>Girls</option>
                                            <option>Both/non</option>
                                        </select>
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Building</label>
<?php 
$query1 = "SELECT * FROM rooms";
$result1 = mysqli_query($conn,$query1) or die('Fails');

if (mysqli_num_rows($result1)>0) {
    echo "<select class='form-control' id='exampleFormControlSelect1' name='building' required>
    <option value='' ></option>";
    while ($row1 = mysqli_fetch_assoc($result1)) {
        echo "<option value='{$row1['id']}''> '{$row1['building']}'</option>";
    }
    echo "/select>";
}
?>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Apply Fess</label>
                                            <select class="form-control" id="exampleFormControlSelect1"
                                                name="applyfess">
                                                <option>No</option>
                                                <option>Yes</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Status</label>
                                            <select class="form-control" id="exampleFormControlSelect1" name="status">
                                                <option>Active</option>
                                                <option>In-Active</option>
                                            </select>
                                        </div>

                                        <div class="form-group mt-3">
                                            <input class="btn btn-primary m-2" name="update" type="submit" value="Update">
                                            <input class="btn btn-primary" type="reset" value="Reset">
                                        </div>

                            </form>
                            <?php 
                                }
                              }
                            ?>
                            </p>
                        </div>
                    </div>
                    <!-- <div style="height: 100vh"></div>
                    <div class="card mb-4">
                        <div class="card-body">When scrolling, the navigation stays at the top of the page. This is the
                            end of the static navigation demo.</div>
                    </div> -->
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