
<?php include "conn.php"; ?>

<?php include 'header.php'; ?>
    <div id="main-content">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <!-- post-container -->
                    <div class="post-container">
                        <?php
                         
                         $limit = 3;

                         if (isset($_GET['page'])) {
                            $page = $_GET['page'];
                         }else {
                            $page = 1;
                         }
                         $offset = ($page - 1) * $limit;

                           $query = "SELECT * FROM rooms LIMIT {$offset},{$limit}";
                        //    DESC LIMIT {$offset},{$limit}";
                           $result = mysqli_query($conn,$query) or die("Query fails");
                           
                           if (mysqli_num_rows($result)) {
                              while ($row = mysqli_fetch_assoc($result)){
      
                        ?>
                        <div class="post-content">
                            <div class="row">
                                <div class="col-md-4">
                                    <a class="post-img" href="single.php?id=<?php echo $row['id']; ?>"><img src="../Main-admin/upload/<?php echo $row['post']; ?>" alt=""/></a>
                                </div>
                                <div class="col-md-8">
                                    <div class="inner-content clearfix">
                                        <h3><a href='single.php?id=<?php echo $row['id']; ?>'><?php echo $row['clg']; ?></a></h3>
                                        <div class="post-information">
                                            <span>
                                                <i class="fa fa-tags" aria-hidden="true"></i>
                                                <a href='category.php'><?php echo $row['building']; ?></a>
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
                                        <p class="description">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua....
                                        </p>
                                        <a class='read-more pull-right' href='single.php?id=<?php echo $row['id']; ?>'>read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                        //  }else {
                        //     echo "Record Not Found";
                         }
                       }
                  
                        $query1 = "SELECT * FROM rooms";
                        $result1 = mysqli_query($conn,$query1) or die("Query UnsecsessFull");

                        if (mysqli_num_rows($result1)>0) {
                            
                            $total_records = mysqli_num_rows($result1);
                            // $limit = 3;
                            $total_pages = ceil($total_records/$limit);
                            
                            echo "<ul class='pagination admin-pagination'>";
                            for ($i=1; $i <= $total_pages; $i++) { 
                                if ($i == $page) {
                                    $active = "active";
                                }else {
                                    $active = "";
                                }
                                echo '<li class="'.$active.'"><a href="index.php?page='.$i.'">'.$i.'</a><li>';
                                // echo '<li><a href="index.php?page='.$i.'">'.$i.'</a><li>';
                            }
                            echo '</ul>';
                              
                            }
                        
                        ?>
                        <!-- <ul class='pagination'>
                            <li class="active"><a href="">1</a></li>
                            
                            <li><a href="">3</a></li>
                        </ul> -->
                    </div><!-- /post-container -->
                </div>
                <?php include 'sidebar.php'; ?>
            </div>
        </div>
    </div>
<?php include 'footer.php'; ?>
