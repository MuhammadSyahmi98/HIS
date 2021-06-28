<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a href="#" class="navbar-brand"><b>Health Information System</b></a>       
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
        <div class="navbar-nav ml-auto action-buttons">
        <?php
            

            $sql = "SELECT * FROM staff WHERE staff_id = ".$staff_id."";

            $result = mysqli_query($conn, $sql);

            if($result->num_rows>0){
                $row = $result->fetch_assoc();

                $staff_name = $row['staff_name'];
            }
        ?>
            <div class="nav-item dropdown"><a href="#" data-toggle="dropdown"><?php echo $staff_name; ?> <i class="fas fa-caret-down"></i></a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="?profile">Profile</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="../logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>
</nav>
