<?php 
include "conn.php";

if (isset($_POST['addmess'])) {

   $day = $_POST['day'];
   $meal = $_POST['meal']; 
   $food_items = $_POST['fooditems'];
   $status = $_POST['status'];

   $query = "INSERT INTO mess (day,meal,fooditems,status) VALUES ('{$day}','{$meal}','{$food_items}','{$status}')";

   $result = mysqli_query($conn,$query) or die("Query faild");

   if ($result) {
    echo "<script> alert('Data inserted') </script>";
    header("Location: hostel_mess_menu.php");
   }else {
       echo "<script> alert('Not inserted') </script>";
   }

}

?>
<!-- Nav bar   -->
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
                        <h3>Create Hostel Mess </h3>
                            <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">

                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Day</label>
                                    <select class="form-control" name="day" id="exampleFormControlSelect1" required>
                                        <option></option>
                                        <option>Sunday</option>
                                        <option>Monday</option>
                                        <option>Tuesday</option>
                                        <option>Wednesday</option>
                                        <option>Thrusday</option>
                                        <option>Friday</option>
                                        <option>Saturday</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect2">Meal</label>
                                    <select class="form-control" id="exampleFormControlSelect2" name="meal">
                                        <option></option>
                                        <option>Brackfast</option>
                                        <option>lunch</option>
                                        <option>dinner</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Food Items</label>
                                    <textarea class="form-control" name="fooditems" id="exampleFormControlTextarea1" rows="3" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect2">Status</label>
                                    <select class="form-control" id="exampleFormControlSelect2" name="status" required>
                                        <option></option>
                                        <option>Active</option>
                                        <option>In-Active</option>
                                    </select>
                                </div>
                                <!-- <div class="form-group">
                                    <label for="exampleFormControlInput1">Email address</label>
                                    <input type="email" class="form-control" id="exampleFormControlInput1"
                                        placeholder="name@example.com">
                                </div> -->
                                <div class="form-group mt-3">
                                    <input class="btn btn-primary m-2" type="submit" name="addmess" value="Submit">
                                    <input class="btn btn-primary" type="reset" value="Reset">
                                </div>
                            </form>
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
</body>

</html>