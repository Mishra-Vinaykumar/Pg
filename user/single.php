<?php include "conn.php"; ?>

<?php include 'header.php'; ?>
    <div id="main-content">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                  <!-- post-container -->
                    <div class="post-container">
                        <div class="post-content single-post">
                        <?php
                        $post_id = $_GET['id'];

                            $query = "SELECT * FROM rooms where id = '{$post_id}'";
                            $result = mysqli_query($conn,$query) or die("Query fails");

                            if (mysqli_num_rows($result)) {
                               while ($row = mysqli_fetch_assoc($result)){
                            
                            ?>
                            <h3><?php echo $row['clg']; ?></h3>
                            <div class="post-information">
                                <span>
                                    <i class="fa fa-tags" aria-hidden="true"></i>
                                    Rooms : <?php echo $row['totalroom']; ?>
                                </span>
                                <span>
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                    <a href='author.php'>Admin</a>
                                </span>
                                <span>
                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                    01 Nov, 2019
                                </span>
                            </div>
                            <img class="single-feature-image" src="../Main-admin/upload/<?php echo $row['post']; ?>" alt=""/>
                            <!-- <img class="single-feature-image" src="demo project/admin-gh-pages/upload<?php echo $row['post']; ?>" alt=""/> -->
                            <!-- <img class="single-feature-image" src="images/post_1.jpg" alt=""/> -->
                            <p class="description">
                            <h3>Facility Type <?php echo $row['facility']; ?></h3>
                            <h3>Hostel For <?php echo $row['hosteltype']; ?></h3>
                            <h3>Building <?php echo $row['building']; ?></h3>

                            </p>
                        </div>
                        <?php
                        }
                    }  ?>
                    </div>
                    <div class="form-group mt-1">
                        <form action="booking.php" method="get">

                            <!-- <input class="btn btn-primary m-2" name="book" type="Number" value="1"> -->
                            <select class="form-control" id="exampleFormControlSelect1" name="booked" required>
                                <option></option>
                                <option>1</option>
                            </select>
                            <input class="btn btn-primary m-2" name="Submit" type="submit" value="Book">
                            <input class="btn btn-primary" type="reset" value="Reset">

                        </form>
                    </div>
                    <!-- /post-container -->
                </div>
                <?php include 'sidebar.php'; ?>
            </div>
        </div>
    </div>
<?php include 'footer.php'; ?>
