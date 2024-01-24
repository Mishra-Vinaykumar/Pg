<?php
 include "conn.php";
    
?>
<div id="sidebar" class="col-md-4">
    <!-- search box -->
    <div class="search-box-container">
        <h4>Search</h4>
        <form class="search-post" action="search.php" method ="GET">
            <div class="input-group">
                <input type="text" name="search" class="form-control" placeholder="Search .....">
                <span class="input-group-btn">
                    <button type="submit" class="btn btn-danger">Search</button>
                </span>
            </div>
        </form>
    </div>
    <!-- /search box -->
    <!-- recent posts box -->
    <div class="recent-post-container">
        <h4>Recent Posts</h4>
        
        <?php
        
            $limit = 3;
            $q = "SELECT * FROM rooms LIMIT {$limit}";
            $r = mysqli_query($conn,$q);
            
            if (mysqli_num_rows($r)) {
               while ($row = mysqli_fetch_assoc($r)){

        ?>
        <div class="recent-post">
            <a class="post-img" href="">
                <img src="../Main-admin/upload/<?php echo $row['post']; ?>" alt=""/>
            </a>
            <div class="post-content">
                <h5><a href="single.php?id=<?php echo $row['id']; ?>"><?php echo $row['clg']; ?></a></h5>
                <span>
                    <i class="fa fa-tags" aria-hidden="true"></i>
                    <a href='category.php'>Html</a>
                </span>
                <span>
                    <i class="fa fa-calendar" aria-hidden="true"></i>
                    01 Nov, 2019
                </span>
                <a class="read-more" href="single.php">read more</a>
            </div>
        </div>
    
            <?php
                 }
                }
            ?>
        <!-- </div> -->
    </div>
    
    <!-- /recent posts box -->
</div>
