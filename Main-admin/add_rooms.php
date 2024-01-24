<?php include "conn.php" ?>

<?php include "sidenavbar.php"; ?>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Static Navigation</h1>
                    <!-- <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                        <li class="breadcrumb-item active">Static Navigation</li>
                    </ol> -->
                    <div class="card mb-4">
                        <div class="card-body">
                            <p class="mb-0">
                            <h3>Add Rooms</h3>

                    <form action="backend_add_rooms.php" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">collage</label>
                                    <select class="form-control" id="exampleFormControlSelect1" name="collage" required>
                                        <option></option>
                                        <option>LJ University</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Rooms</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" name="totalroom"
                                        placeholder="no of rooms" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Add Rooms Image</label>
                                    <input type="file" class="form-control" id="exampleFormControlInput1" name="filetoupload" required>
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
                                            <select class="form-control" id="exampleFormControlSelect1" name="building" required>
                                                <option></option>
                                                <option>lj dept btec</option>
                                                <option>lj dept sci</option>
                                                <option>lj dept physio</option>
                                                <option>lj dept politecnic</option>
                                            </select>
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
                                            <input class="btn btn-primary m-2" name="Submit" type="submit" value="Submit">
                                            <input class="btn btn-primary" type="reset" value="Reset">
                                        </div>

                            </form>
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